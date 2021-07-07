# importar biblioteca
import random

# disponibilizar dados para criacao da senha
minusculas = "abcdefghijklmnopqrstuvxyz"
maiusculas = minusculas.upper()
numeros = "123456789"
simbolos = "=[]()*&;/_-@+"

# montar formato da senha
embaralha = minusculas + maiusculas + numeros + simbolos
qtdigitos = 5

# gerar senha
senha = "".join(random.sample(embaralha,qtdigitos))
print(senha)