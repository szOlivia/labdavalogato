#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

// színérzékelőhöz
#include <Wire.h>
#include "Adafruit_TCS34725.h"
//szervo
#include <Servo.h>


// Set WiFi credentials
#define WIFI_SSID "Elso_Sor"

#define WIFI_PASS "12345678"

//első szervó poziciója
int pos = 0;
int pos2 = 0;

// Create a new web server
ESP8266WebServer webserver(80);

//Kliens beállítás
WiFiClient client;
HTTPClient httpClient;

//Színérzékelő
Adafruit_TCS34725 tcs = Adafruit_TCS34725(TCS34725_INTEGRATIONTIME_50MS, TCS34725_GAIN_4X);


Servo servo1;
Servo servo2;


void setup()
{
  // Setup serial port
  Serial.begin(115200);
  Serial.println();

  //szervo
  servo1.attach(D6);
  servo2.attach(D7);

  //Begin WiFi
  WiFi.begin(WIFI_SSID, WIFI_PASS);
  while (WiFi.status() != WL_CONNECTED) { 
    
    Serial.print(".");
    delay(100); 
  }

  // WiFi Connected
  Serial.print("Kapcsolódva! IP címe: ");
  Serial.println(WiFi.localIP());

  //színszenzor bekapcsolása
  tcs.begin();

  // Start Web Server
  webserver.on("/hello", rootPage);
  webserver.onNotFound(notfoundPage);

  webserver.begin();
}

// Listen for HTTP requests
void loop(void){ 
  webserver.handleClient(); 
  

  mozgatSzinVizsgalatra();

  mozgatCsuszda();

  //színérzékelés
   float red, green, blue;
  tcs.setInterrupt(false);  // turn on LED
  delay(60);  // takes 50ms to read
  tcs.getRGB(&red, &green, &blue);
  tcs.setInterrupt(true);  // turn off LED
 
  //Serial.print("R:\t"); Serial.print(int(red));
  //Serial.print("\tG:\t"); Serial.print(int(green));
  //Serial.print("\tB:\t"); Serial.print(int(blue));

  //szinMeres(String(red),String(green),String(blue));
  pos=0;
  pos2=0;
  delay(3000);
}

// Handle Root
void rootPage() { 
  webserver.send(200, "text/html", "<h1>Helló</h1>"); 
}

// Handle 404
void notfoundPage(){ 
  webserver.send(404, "text/plain", "404: Not found"); 
}

void szinMeres(String r, String g, String b){
  String data = "r="+r+"&g="+g+"&b="+b;
  const char *URL = "http://192.168.0.106/labdavalogato/public/szinMentes";
  httpClient.begin(client,URL);
  httpClient.addHeader("Content-Type","application/x-www-form-urlencoded");
  httpClient.POST(data);
  String content = httpClient.getString();
  httpClient.end();
  Serial.println("Tartalom:");
  Serial.println(content);
}


 void mozgatSzinVizsgalatra(){
 for(pos=pos;pos<=70;pos+=1){
   servo1.write(pos);
   delay(15);
 }
} 

void mozgatCsuszda(){
 for(pos2=pos2;pos2<=70;pos2+=1){
   servo2.write(pos2);
   delay(15);
 }
}

/*
void mintaKuldes(float tavolsag, String nev){
  String data = "";
  httpClient.begin(client,URL);
  httpClient.addHeader("Content-Type","application/x-www-form-urlencoded");
  httpClient.POST(data);
  String content = httpClient.getString();
  httpClient.end();
  Serial.println("Tartalom:");
  Serial.println(content);
}*/