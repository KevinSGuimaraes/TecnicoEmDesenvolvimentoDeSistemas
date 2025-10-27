#define START 2
#define SAIDA 4
#define LED_VERDE 8
#define LED_AMARELO 9
#define LED_VERMELHO 10
#define BOUNDRATE 9600

//variáveis
int bit_0 = 0;
int bit_1 = 0;
int bit_2 = 0;
int comecar = 0;

void setup() {
  // put your setup code here, to run once:
  pinMode(START, INPUT);
  pinMode(SAIDA, OUTPUT);
  pinMode(LED_VERDE, INPUT);
  pinMode(LED_AMARELO, INPUT);
  pinMode(LED_VERMELHO, INPUT);
  Serial.begin(BOUNDRATE); 
  digitalWrite(START,LOW); 

}

void loop()
{
  // put your main code here, to run repeatedly:
  comecar = digitalRead(START);
  bit_0 = digitalRead(LED_VERMELHO);
  bit_1 = digitalRead(LED_AMARELO);
  bit_2 = digitalRead(LED_VERDE);

if(comecar == 1)
{
  if(bit_2 && bit_1 && bit_0)
  {
    Serial.println("111 = 7");
    for(int i = 0; i < 7; i++)
    {
      digitalWrite(SAIDA,HIGH);
      delay(500);
      digitalWrite(SAIDA,LOW);
      delay(500);
    }
  }
  else if(bit_2 && bit_1 && !bit_0)
  {
    Serial.println("110 = 6");
    for(int i = 0; i < 6; i++)
    {
      digitalWrite(SAIDA,HIGH);
      delay(500);
      digitalWrite(SAIDA,LOW);
      delay(500);
    }
  }
  else if(bit_2 && !bit_1 && bit_0)
  {
    Serial.println("101 = 5");
    for(int i = 0; i < 5; i++)
    {
      digitalWrite(SAIDA,HIGH);
      delay(500);
      digitalWrite(SAIDA,LOW);
      delay(500);
    }
  }
  else if(bit_2 && !bit_1 && !bit_0)
  {
    Serial.println("100 = 4");
    for(int i = 0; i < 4; i++)
    {
      digitalWrite(SAIDA,HIGH);
      delay(500);
      digitalWrite(SAIDA,LOW);
      delay(500);
    }
  }
  else if(!bit_2 && bit_1 && bit_0)
  {
    Serial.println("011 = 3");
    for(int i = 0; i < 3; i++)
    {
      digitalWrite(SAIDA,HIGH);
      delay(500);
      digitalWrite(SAIDA,LOW);
      delay(500);
    }
  }    
  else if(!bit_2 && bit_1 && !bit_0)
  {
    Serial.println("010 = 2");
    for(int i = 0; i < 2; i++)
    {
      digitalWrite(SAIDA,HIGH);
      delay(500);
      digitalWrite(SAIDA,LOW);
      delay(500);
    }
  }
  else if(!bit_2 && !bit_1 && bit_0)
  {
    Serial.println("001 = 1");
    for(int i = 0; i < 1; i++)
    {
      digitalWrite(SAIDA,HIGH);
      delay(500);
      digitalWrite(SAIDA,LOW);
      delay(500);
    }
  }
  else if(!bit_2 && !bit_1 && !bit_0)
  {
      Serial.println("000 = 0");
      digitalWrite(SAIDA,LOW);
      delay(500);
  }
}
  comecar = 0;
  delay(2000);
}
