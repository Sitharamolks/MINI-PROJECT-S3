
# coding: utf-8

# In[1]:


import pandas as pd
import joblib


# In[2]:


data=pd.read_csv("input.csv")#,index_col='date',parse_dates=True)
data.head()


# In[3]:


maps=joblib.load("maps.joblib")


# In[4]:


reg=joblib.load("model.joblib")


# In[5]:


maps


# In[6]:


df=data


# In[7]:


df.replace(maps,inplace=True)
df


# In[8]:


pred=reg.predict(df)
pred


# In[9]:


file=open("out.txt","w")
file.write(str(pred[0][0]))
file.close()
from matplotlib import pyplot as plt
x=['data']
y=[pred[0][0]]
plt.bar(x,y)
plt.title("Sales prediction")
plt.ylabel("sales")
plt.savefig("graph.jpg")
plt.close()
