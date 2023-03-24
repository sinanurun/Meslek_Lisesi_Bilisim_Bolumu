#include <IRremote.h> //*

const byte IR_RECEIVE_PIN = 11; //*
int durum = 0;
int ses = 90;
void setup()
{
   Serial.begin(115200); //115200
   Serial.println("IR Receive test");
   IrReceiver.begin(IR_RECEIVE_PIN, ENABLE_LED_FEEDBACK); //*
}

void loop()
{
   if (IrReceiver.decode()) //*
   {
      Serial.println(IrReceiver.decodedIRData.command, HEX); //*
     Serial.println(IrReceiver.decodedIRData.command); //*
     // aç kapa
     if(IrReceiver.decodedIRData.command == 0){
     
       if (durum == 0){
       durum = 1;
         Serial.println("Kumanda Acildi");
       }
       else
       {
         durum = 0;
         Serial.println("Kumanda Kapandi");
       }
     }
     
     if (durum == 1){
      // ses arttır azalt
     if(IrReceiver.decodedIRData.command == 1 && ses <100){
       ses++; 
         Serial.println("Ses Seviyesi Artti: ");
       Serial.println(ses);
     }
     else if (IrReceiver.decodedIRData.command == 9 && ses >0){
       ses--; 
         Serial.println("Ses Seviyesi Azaldi:");
       Serial.println(ses);
     }
     // ses ayarı bitti
     }
     
      IrReceiver.resume(); //*
   }
}