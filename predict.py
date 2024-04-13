#importing all needed libaries 
import sys
import pandas as pd
from matplotlib import pyplot as plt
import numpy as np
path = sys.argv[1]

#reading CSV file
df = pd.read_csv(path)

#print(df)

#Calculating size of Independent col
sizes = df["status"].value_counts(sort=1)
#print(sizes)

#drop all un-needed from DATASETS 
df.drop(['ID'],axis=1,inplace=True)
df.drop(['Name'],axis=1,inplace=True)
df.drop(['date'],axis=1,inplace=True)
df.drop(['domain'],axis=1,inplace=True)
df.drop(['require'],axis=1,inplace=True)
df.drop(['found'],axis=1,inplace=True)
#print(df)
#drop all rows who have NA values
df =df.dropna()

#Convert non-numeric to numeric
#for status col
df.status[df.status == 'yes'] = 1
df.status[df.status == 'no'] = 2

#print(df)

#define dependent variable
Y = df['status'].values
Y = Y.astype('int')

#define independent variable
X = df.drop(labels = ['status'],axis=1)

#split the datasets
from sklearn.model_selection import train_test_split
X_train,X_test,Y_train,Y_test = train_test_split(X,Y,test_size=0.9,random_state=15)

#print(X_train)

from sklearn.ensemble import RandomForestClassifier
e_estimators = 5
#calling Random Forest Classfier for Prediction
modal = RandomForestClassifier(e_estimators,random_state=15)

#fitting in modal 
modal.fit(X_train,Y_train)

#calculating prediction
prediction_test = modal.predict(X_test)

#print(prediction_test)

#importing metric for accuracy
from sklearn import metrics
p = metrics.accuracy_score(Y_test,prediction_test)
#calculaing it to percentage
m=p*100

#print("Accuracy = ",p)
#displaying it
print(m)