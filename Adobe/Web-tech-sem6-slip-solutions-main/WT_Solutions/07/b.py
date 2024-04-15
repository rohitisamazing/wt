import pandas as pd
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, association_rules

# read the dataset
df = pd.read_csv('Market_Basket_Optimisation.csv', header=None)

# drop null values
df.dropna(inplace=True)

# convert categorical values to numeric using one-hot encoding
te = TransactionEncoder()
te_ary = te.fit(df.values).transform(df.values)
df = pd.DataFrame(te_ary, columns=te.columns_)

# generate frequent itemsets using apriori algorithm
frequent_itemsets = apriori(df, min_support=0.01, use_colnames=True)

# generate association rules from frequent itemsets
rules = association_rules(frequent_itemsets, metric="lift", min_threshold=1)

# display information
print("Original Dataset:\n")
print(df.head())
print("\nFrequent Itemsets:\n")
print(frequent_itemsets)
print("\nAssociation Rules:\n")
print(rules)
