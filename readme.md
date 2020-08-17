Escreva uma função que otimiza a saída de notas de um caixa eletrônico.
Este caixa eletrônico contém notas de R$2,00, R$5,00, R$10,00, R$20,00, R$50,00, R$100,00 e R$200,00.
Sua tarefa consiste em devolver o menor número de notas que corresponda ao valor total pedido pelo cliente do banco.
Se o cliente pedir R$100,00, basta devolver uma nota de R$100,00.
Se o cliente pedir R$8,00, o caixa eletrônico deverá devolver 4 notas de R$2,00.
Se o cliente pedir R$82,00, deverá devolver 1 nota de R$50,00, 1 nota de R$20,00, 1 nota de R$10,00 e 1 de R$2,00.
Uma solução inválida para este último caso seria: 8 notas de R$10,00 e 1 nota de R$2,00.
Se o cliente pedir R$3,00, o caixa eletrônico deverá dizer que não consegue devolver este valor.
O caixa tem notas suficientes para saques de até até R$ 10000,00.

Especificações:
- Entrada -> Argumento da função: Um inteiro entre 1 e 10000 representando o valor pedido pelo cliente do banco.
- Saída -> A saída deverá ter o seguinte padrão:
"Notas entregues: A notas de R$200,00, B notas de R$100,00, C notas de R$50,00, D notas de R$20,00, E notas de R$10,00, F notas de R$5,00" e G notas de R$2,00.
Sendo A, B, C, D, E, F e G inteiros positivos
- Não esqueça de validar as entradas!