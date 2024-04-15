import pandas as pd
import random
from sklearn.linear_model import LinearRegression

# create the dataset
fish_species = ['Tuna', 'Salmon', 'Trout', 'Bass', 'Sardine', 'Cod', 'Mackerel']
weights = []

for i in range(50):
    fish_weight = []
    for j in range(7):
        weight = random.randint(1, 20)
        fish_weight.append(weight)
    weights.append(fish_weight)

df = pd.DataFrame(weights, columns=fish_species)

# create the linear regression model
X = df.iloc[:, :-1]  # independent variables
y = df.iloc[:, -1]   # target variable
model = LinearRegression()
model.fit(X, y)

# predict the weight of a new fish species
new_fish = [[10, 12, 15, 7, 4, 8]]  # example input
predicted_weight = model.predict(new_fish)
print("Predicted weight:", predicted_weight)
