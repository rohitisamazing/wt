import pandas as pd
from sklearn.datasets import load_iris
from sklearn.linear_model import LogisticRegression
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score

# load the iris dataset
iris = load_iris()

# create a dataframe from the dataset
df = pd.DataFrame(iris.data, columns=iris.feature_names)
df['target'] = iris.target

# view basic statistical details of the different species
print("Statistical details of Iris-setosa:")
print(df[df['target'] == 0].describe())

print("Statistical details of Iris-versicolor:")
print(df[df['target'] == 1].describe())

print("Statistical details of Iris-virginica:")
print(df[df['target'] == 2].describe())

# split the data into training and testing sets
X = df.iloc[:, :-1]
y = df.iloc[:, -1]
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Fit a logistic regression model
logreg = LogisticRegression()
logreg.fit(X_train, y_train)

# make predictions on the test set
y_pred = logreg.predict(X_test)

# calculate the accuracy of the model
accuracy = accuracy_score(y_test, y_pred)
print("Accuracy of the logistic regression model:", accuracy)
