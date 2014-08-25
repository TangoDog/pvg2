######################3 calcDmek.R
########## Script to be run from shell
#### collects only argument , the csv file name of the uploaded file from the server
###### parses the file, checks if sph6/cyl6/and m6_axis are empty - that is the key that this is to be calculated
#  Performs the Bart tree calculation f as well as SRKT, Holladay I and HofferQ
findNAs <- function(df,names=F) {
  return(which(is.na(df),arr.ind=T))
}

calcDmek <-function(csvName) {
  tmp = read.csv(csvName);
  ## the following workspace has the dataset for bart and the functions
  load('~/Documents/Price/finalPrice.RData');
  ## limit the data of tmp to the important fields only used in Bart Calculations
  tmp2 = tmp[,impFields];
  
  
  
}