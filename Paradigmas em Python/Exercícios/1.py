lista_perguntas = [ ]

res = [ ]
soma_respostas = 0

for i in range ( len (lista_perguntas)):
    print (lista_perguntas [ i ])
    res.insert ( input ( )) # adiciona as respostas na lista res
    soma_respostas = soma_respostas + int ( respostas [ i ] ) # soma o número da respotas
    status = ["Inocente", "Suspeita", "Cúmplice", "Assassino"]

    if soma_respostas == 5:
        print ( status [ 3 ])
elif (soma_respostas  > 2) and (soma_respostas < 5):
    print ( status [ 2 ])
elif soma_respostas == 2:
    print ( status [ 1 ])
else:
    print ( status [ 0 ])
