from prettytable import PrettyTable


# Cria variavel e adicionar dados a tabela
PTables = PrettyTable (["Selection No.", "Weapon Name", "Damage"])
PTables.add_row(["0", "Fist", "1 dp"])
PTables.add_row(["1", "Knuckle Busters", "2.5 dp"])
PTables.add_row(["2", "Cheap Knife", "5 dp"])
PTables.add_row(["3", "Wooden Baton", "6 dp"])

# Exibe tabela
print(PTables)