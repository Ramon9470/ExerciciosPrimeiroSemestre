#include <stdio.h>
#include <stdlib.h>

int main()
{
    int numero1, numero2, soma;

    soma = numero1 + numero2;

    printf("Digite o primeiro numero: \n");
    scanf("%d", &numero1);
    printf("digite o segundo numero: \n");
    scanf("%d", &numero2);

    printf("A soma eh: ", soma);

    return 0;
}
