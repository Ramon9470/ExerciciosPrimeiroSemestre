# 9. Faça um Programa que leia três números e mostre-os em ordem decrescente.

lista = []
quantidade = 3

for i in range (quantidade):
    sequencia = int ( input ('Digite um número: '))
    lista.append(sequencia)

lista.sort(reverse = True)
print (lista)
