## Control Servos with the Arduino 
Servo motors are capable of precise control of the rotation of a motor shaft. They allow you to set an exact angle of rotation with code, or with inputs. ***Here we are using a Servo motor as an analog to the Arm of our robot.***<br>
## How does it work?
- set the initial angle of servo motor is 90 degree
- The code will recieve an input from serial as (left || right)
- If the string = right, then rotate the servo motor to 180 degress
- If the string = left, then rotate the servo motor to 0 degrees.

## Wiring diagram

<img src="/ArduinoControlCode/Arduino_task4.png" width="790" height="400">
