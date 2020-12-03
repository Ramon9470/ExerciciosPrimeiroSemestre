# 3. Faça um Programa que verifique se uma letra digitada é "F" ou "M". Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido.

sexo = str ( input ('Informe seu sexo [M / F]'))

while sexo not in 'MF':
    print ('Dados inválidos, informar verificação do sexo: ')

print ('Seu sexo é ', sexo)
