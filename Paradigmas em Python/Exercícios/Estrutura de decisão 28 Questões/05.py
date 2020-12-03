# 5. Faça um programa para a leitura de duas notas parciais de um aluno. O programa deve calcular a média alcançada por
# aluno e apresentar:
# A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
# A mensagem "Reprovado", se a média for menor do que sete;
# A mensagem "Aprovado com Distinção", se a média for igual a dez.

av1 = float ( input ('Digite a primeira nota: '))
av2 = float ( input ('Digite a segunda nota: '))

media = (av1 + av2) / 2

if (media >= 7):
    if (media == 10):
        print ('Aluno aprovado com Distinção', media)
    else:
        print ('Aluno aprovado', media)
else:
    print ('Aluno reprovado', media)
