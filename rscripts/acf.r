#print('t')
args = commandArgs(TRUE)


library(jsonlite,lib.loc = "/var/www/arima/rscripts/lib")

x=fromJSON(args[2])

y = acf(x,plot=FALSE)
#print(y)
#print(y$acf)
z = toJSON(as.vector(y$acf))

print(z)