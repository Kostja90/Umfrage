############################################
# Zentralrat der Juden 
# Konstantin Shuxtelinsky
# created 25.06.18
# last change 26.06.18
## 
# This R-Script is used to increase the identification of yaml-files identifiers
# when copieng in TYPO3 the identifiers do not increase automaticaly.
# When loading the yaml-file into this Script it will automaticaly increase all identifiers.
# 
# YAML-file needs to have a page -> fieldset -> text or singleselect or sth / fieldset -> text or ...
# 
# !!!!!!!!!!!!!!
# Be carfeull with the path, this has to be right pointed either throug file.choose or hardoded
# !!!!!!!!!!!!!!
##
############################################

############################################
############# FUNCTIONS ####################
############################################

setNULL <- function(yamlfile){
  gsub('\\d+', 'NULL', yamlfile$identifier) 
}

# get yamlfile identifiers name
# returns string
getName <- function(yamlfile){
  return(yamlfile$identifier)
}

# change the identifiers increments
# 3 specific and onefor everything else
# returns a list with first yamlile and second dataframe with actual increment count
changeIdentifier <- function(yamlfile , startVec = data.frame(singNrStart, txtNrStart, fieldNrStart, startNr)){
  if(substr(getName(yamlfile),1,13) == 'singleselect-'){
    yamlfile$identifier <- gsub('\\d+', startVec$singNrStart, yamlfile$identifier)
    startVec$singNrStart = startVec$singNrStart + 1 
  } else if(substr(getName(yamlfile),1,9) == 'fieldset-'){
    yamlfile$identifier <- gsub('\\d+', startVec$fieldNrStart, yamlfile$identifier)  
    startVec$fieldNrStart = startVec$fieldNrStart + 1
  } else if(substr(getName(yamlfile),1,5) == 'text-'){
    yamlfile$identifier <- gsub('\\d+', startVec$txtNrStart, yamlfile$identifier)  
    startVec$txtNrStart = startVec$txtNrStart + 1
  } else {
    yamlfile$identifier <- gsub('\\d+', startVec$startNr, yamlfile$identifier)  
    startVec$startNr = startVec$startNr + 1
  }
  
  return(list(yaml = yamlfile, Start = startVec))
}

############################################
################ MAIN ######################
############################################

library(yaml) 
library(dplyr)

# choose path to file or  
#path <- file.choose()

# hardcode path to file
path <- "C:\\xampp\\htdocs\\site\\fileadmin\\user_upload\\umfrage.yaml"

# Starting vectors
singNrStart <- 1
pagNrStart <- 1
fieldNrStart <- 1
txtNrStart <- 1
startNr <- 1

# read a csvfileto get the final page number
data <- read.csv(path, header = FALSE)
pagNrFinal <- sum(as.integer(grepl("page-", data$V1)))


# create YAML file from te oriignal one
new <- read_yaml(path)

startVector <- data.frame(singNrStart, txtNrStart, fieldNrStart, startNr)
fieldYaml <- list(yaml = new, Start = startVector)

# change all increments
for (i in 1:(pagNrFinal -1)){
  # go through each page and acsess all fieldsets
  fieldNrEnd <- length(new$renderables[[i]]$renderables)
  for(j in 1:fieldNrEnd){
    # access and change fieldset and increase the counts
    interStep <- new$renderables[[i]]$renderables[[j]]
    zwischen <-changeIdentifier(interStep, fieldYaml$Start)
    fieldYaml$yaml$renderables[[i]]$renderables[[j]] <- zwischen$yaml 
    fieldYaml$Start <- zwischen$Start 
    
    # get length of next level (text, singleselect or even again fieldset)
    nrEnd <- length(new$renderables[[i]]$renderables[[j]]$renderables)
    for(k in 1:nrEnd){
      # access and change text, singleselect etc.
      interStep <- new$renderables[[i]]$renderables[[j]]$renderables[[k]]
      zwischen <- changeIdentifier(interStep, fieldYaml$Start)
      fieldYaml$yaml$renderables[[i]]$renderables[[j]]$renderables[[k]] <- zwischen$yaml
      fieldYaml$Start <- zwischen$Start
      
      # if fieldset
      if(substr(getName(interStep),1,9) == 'fieldset-'){
        finalField <- length(new$renderables[[i]]$renderables[[j]]$renderables[[k]]$renderables)
        for(l in 1:finalField){
          # access and change text, singleselect etc.
          interStep <- new$renderables[[i]]$renderables[[j]]$renderables[[k]]$renderables[[l]]
          zwischen <- changeIdentifier(interStep, fieldYaml$Start)
          fieldYaml$yaml$renderables[[i]]$renderables[[j]]$renderables[[k]]$renderables[[l]] <- zwischen$yaml
          fieldYaml$Start <- zwischen$Start
        }
      }
    }
  }
}

#newpath <- paste(substr(path,1,nchar(path)-5 ),1,".yaml", sep = "")
# overwrite the changed file
write_yaml(fieldYaml$yaml,path)
