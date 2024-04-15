import pandas as pd
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, association_rules

# Load the dataset
df = pd.read_csv('market_basket.csv')

# Drop any rows with null values
df.dropna(inplace=True)

# Convert categorical values to numeric format
te = TransactionEncoder()
te_ary = te.fit(df.values).transform(df.values)
df = pd.DataFrame(te_ary, columns=te.columns_)

# Generate frequent itemsets
frequent_itemsets = apriori(df, min_support=0.01, use_colnames=True)

# Generate association rules
rules = association_rules(frequent_itemsets, metric="lift", min_threshold=1)

# Display information about the dataset
print("Dataset information:")
print(df.info())

# Display the frequent itemsets
print("\nFrequent itemsets:")
print(frequent_itemsets)

# Display the association rules
print("\nAssociation rules:")
print(rules)
