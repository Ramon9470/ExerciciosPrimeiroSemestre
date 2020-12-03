# 3. Faça um Programa que verifique se uma letra digitada é "F" ou "M". Conforme a letra escrever: F - Feminino, M -
# Masculino, Sexo Inválido.

sexo = input("Informe o sexo conforme a letra \"F\" ou \"M\": ")
if sexo == "F" or sexo == "M":
    if sexo == "F":
        print ("F - Feminino")
    else:
        print ("M - Masculino")
else:
    print ("sexo invalido")