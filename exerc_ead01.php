<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nutrição</title>
        <link rel="stylesheet" 
        type='text/css'
        href='./css/estilo.css'>
    </head>
      <?php

        $data1 = new DateTime('19800101');
        $data2 = new DateTime('19900228');
        $data3 = new DateTime('19850910');
        $data4 = new DateTime('19890904');
        $data5 = new DateTime('19781231');
        $idade1 = $data1->diff(new DateTime());
        $idade2 = $data2->diff(new DateTime());
        $idade3 = $data3->diff(new DateTime());
        $idade4 = $data4->diff(new DateTime());
        $idade5 = $data5->diff(new DateTime());    

        $p= 2;
        $altura1           = 2.00;
        $altura2           = 1.72;
        $altura3           = 1.64;
        $altura4           = 1.73;
        $altura5           = 1.55;
        $potencia1         = pow($altura1, $p); 
        $potencia2         = pow($altura2, $p);
        $potencia3         = pow($altura3, $p);
        $potencia4         = pow($altura4, $p);
        $potencia5         = pow($altura5, $p);

        $IMC1              = (100/$potencia1);
        $IMC2              = (80/$potencia2);
        $IMC3              = (54/$potencia3);
        $IMC4              = (85/$potencia4);
        $IMC5              = (46/$potencia5);
        $IMCEstilo1    = number_format($IMC1, 2, ',', '.');
        $IMCEstilo2    = number_format($IMC2, 2, ',', '.');
        $IMCEstilo3    = number_format($IMC3, 2, ',', '.');
        $IMCEstilo4    = number_format($IMC4, 2, ',', '.');
        $IMCEstilo5    = number_format($IMC5, 2, ',', '.');

      ?>
    <body>
    <table border='1'>
      <tr>
        <td class='Titulo'>
          <h1>
              Promove Nutrição
          </h1>
        <!--</td>
      <!--</tr>
      <!--<tr>
        <!--<td>-->
          <h2 align = 'center' >
              Meus Pacientes
              <!--<hr>-->
          </h2>
        </td>
      </tr>
    </table>    
        <table>
            <tr>
                <th>
                    Nome 
                </th>
                <th>
                    Peso(kg)
                </th>
                <th>
                    Altura(m)
                </th>
                <th>
                    IMC
                </th>
                <th>
                    Data de Nascimento
                </th>
                <th>
                    Idade
                </th>
            </tr>
            <tr>
                <td>
                    John Petrucci
                </td>
                <td>
                    100
                </td>
                <td>
                    2.00
                </td>
                <td>
                    <?php echo $IMCEstilo1;  ?>
                </td>
                <td>
                    01/01/1980
                </td>                
                <td> 
                    <?php echo $idade1->y . " anos"; ?> 
                </td>                
            </tr>
            <tr>
                <td>
                    John Myung
                </td>
                <td>
                    80
                </td>
                <td>
                    1.72
                </td>
                <td>
                    <?php echo $IMCEstilo2;  ?>
                </td>
                <td>
                    28/02/1990
                </td>
                <td> 
                    <?php echo $idade2->y . " anos"; ?> 
                </td>
            </tr>
            <tr>
                <td>
                    James Labrie
                </td>
                <td>
                    54
                </td>
                <td>
                    1.64
                </td>
                <td>
                    <?php echo $IMCEstilo3;  ?> 
                </td>
                <td>
                    10/09/1985
                </td>
                <td> 
                    <?php echo $idade3->y . " anos"; ?> 
                </td>
            </tr>
            <tr>
                <td>
                    Jordan Rudess
                </td>
                <td>
                    85
                </td>
                <td>
                    1.73
                </td>
                <td>
                    <?php echo $IMCEstilo4;  ?> 
                </td>
                <td>
                    04/09/1989
                </td>
                <td> 
                    <?php echo $idade4->y . " anos"; ?> 
                </td>
            </tr>
            <tr>
                <td>
                    Mike Mangini
                </td>
                <td>
                    46
                </td>
                <td>
                    1.55
                </td>
                <td>
                    <?php echo $IMCEstilo5;  ?> 
                </td>
                <td>
                    31/12/1978
                </td>
                <td> 
                    <?php echo $idade5->y . " anos"; ?> 
                </td>
            </tr>
        </table>
        
    </body>
</html>