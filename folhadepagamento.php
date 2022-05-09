<? php
  nomefunc = input("Digite o nome do Funcionário"); 
horatraba = int(input("Digite as horas trabalhadas"));
valorhora = float(input("Digite o valor das horas trabalhadas"));
valorbruto = horatraba * valorhora;
descvt = valorbruto * 0.08;

if valorbruto <= 1000:
             v1 = valorbruto * 0.10;
             valordesc = v1+descvt;
             valorliqui = valorbruto - valordesc;
elif valorbruto <= 2000:
             v2 = valorbruto * 0.15;
             valordesc = v2+descvt;
             valorliqui = valorbruto - valordesc;
else:
             v3 = valorbruto * 0.20;
             valordesc = v3+descvt;
             valorliqui = valorbruto - valordesc;

print("Controle Geral: Folha de pagamento");
print("___________________________________");
print("\n");
print("Funcionário:", nomefunc);
print("Salário Bruto", valorbruto);
print("VT:", descvt);
print("INSS:", valordesc);
print("Valor à Receber:", valorliqui);



?>
