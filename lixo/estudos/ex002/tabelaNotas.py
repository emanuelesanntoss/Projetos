# importar bibliotecas
from prettytable import PrettyTable
from prettytable import from_csv

# Cria variavel e tabela
myTable = PrettyTable(["Nome", "Turma", "Nota"])

#adicionar colunas
myTable.add_row(["Maria","3A", "8"])
myTable.add_row(["Pedro","3A", "9"])
myTable.add_row(["Samanta","3A", "8"])
myTable.add_row(["Maria Louca","2B", "6"])
myTable.add_row(["Luiz","1D", "4"])
myTable.add_row(["Mariana","3A", "6"])
myTable.add_row(["Betina","3C", "8"])
myTable.add_row(["Juliana","1D", "7"])

#Exibe dados
print(myTable)



