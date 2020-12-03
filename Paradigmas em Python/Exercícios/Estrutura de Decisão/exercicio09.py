# 9. Faça um Programa que leia três números e mostre-os em ordem decrescente.

primeiro = int ( input ('Digite o primeiro número: '))
segundo = int ( input ('Digire o segundo número: '))
terceiro = int ( input ('Digite o terceiro número: '))

print (primeiro, '-', segundo, '-', terceiro)

if (terceiro > segundo):
    aux = terceiro
    terceiro = segundo
    segundo = aux

if (segundo > primeiro):
    aux = segundo
    segundo = primeiro
    primeiro = aux

if (terceiro > segundo):
    aux = terceiro
    terceiro = segundo
    segundo = aux

print (primeiro, '-', segundo, '-', terceiro)