# 4. Faça um Programa que verifique se uma letra digitada é vogal ou consoante.

letra = str ( input ('Digite uma vogal: '))

if letra == "a"  or letra == "e" or letra == "i" or letra == "o" or letra == "u":
    print (letra, ', é uma vogal')
else:
    print (letra, ', é uma consoante')