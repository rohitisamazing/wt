import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
# Create the Position_Salaries dataset
data = {'Position': ['CEO', 'charman', 'director', 'Senior Manager', 'Junior Manager', 'Intern'],         
        'Level': [1, 2, 3, 4, 5, 6],         
        'Salary': [50000, 80000, 110000, 150000, 200000, 250000]}
df = pd.DataFrame(data)

# Identify the independent and target variables 
X = df.iloc[:, 1:2].values
Y = df.iloc[:, 2].values

# Split the variables into training and testing sets with a 7:3 ratio
X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=0.3, random_state=0)

# Print the training and testing sets
print("X_train:\n", X_train)
print("y_train:\n", y_train)
print("X_test:\n", X_test)
print("y_test:\n", y_test)

# Build a simple linear regression model
regressor = LinearRegression()
regressor.fit(X_train, y_train)

# Print the coefficients and intercept
print("Coefficients:", regressor.coef_)
print("Intercept:", regressor.intercept_)