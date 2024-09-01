# ESP32 HTU21D Humidity and Temperature Logger

## Overview

This project utilizes the ESP32 microcontroller and the HTU21D sensor to log humidity and temperature data. The data is sent to a web server using HTTP polling, allowing real-time monitoring through a web interface.

## Features

- Measures temperature and humidity using the HTU21D sensor.
- Sends data to a web server at regular intervals.
- Displays the logged data on a simple web interface.
- Easy to set up and configure.

## Components Required

- **ESP32 Development Board**
- **HTU21D Temperature and Humidity Sensor**
- **Jumper Wires**
- **Breadboard (optional)**
- **Computer with Arduino IDE**
- **Web Server (local or cloud-based)**

## Wiring Diagram

Connect the HTU21D sensor to the ESP32 as follows:

| HTU21D Pin | ESP32 Pin |
|-------------|-----------|
| VCC         | 3.3V      |
| GND         | GND       |
| SDA         | GPIO 21   |
| SCL         | GPIO 22   |

## Software Requirements

- **Arduino IDE**: Install the latest version of the Arduino IDE.
- **ESP32 Board Support**: Install ESP32 board support via the Arduino Board Manager.
- **Libraries**: Install the following libraries:
  - `Wire.h` (included in Arduino IDE)
  - `HTU21D.h` (available through the Library Manager)

## Installation Steps

1. **Clone the Repository**: Clone this repository to your local machine or download the ZIP file.

   ```bash
   git clone https://github.com/yourusername/esp32-htu21d-logger.git
   ```

2. **Open Arduino IDE**: Launch the Arduino IDE and open the project file.

3. **Install Libraries**: Ensure the necessary libraries are installed. Go to `Sketch` > `Include Library` > `Manage Libraries`, and search for the HTU21D library.

4. **Configure Wi-Fi Credentials**: Open the `main.ino` file and update the Wi-Fi credentials.

   ```cpp
   const char* ssid = "your_SSID"; // Replace with your network SSID
   const char* password = "your_PASSWORD"; // Replace with your network password
   ```

5. **Set Up Server URL**: Update the server URL in the code where the ESP32 sends data.

   ```cpp
   http.begin("http://your-server.com/get_sensor_data.php"); // Replace with your server URL
   ```

6. **Upload the Code**: Connect your ESP32 to your computer and upload the code.

7. **Set Up the Web Server**: Create a simple PHP script on your web server to handle incoming data and return sensor readings. Refer to the example in the previous response.

## Usage

1. **Power the ESP32**: After uploading the code, power the ESP32. It will connect to the Wi-Fi network and start sending data to the server.

2. **Access the Web Interface**: Open your web browser and navigate to the URL of your PHP script to view the logged humidity and temperature data.

## Example PHP Script

Here's a simple example of a PHP script that can be used to receive and display the sensor data:

```php
<?php
// Simulate sensor data
$sensorData = array("temperature" => rand(20, 30), "humidity" => rand(30, 70));
header('Content-Type: application/json');
echo json_encode($sensorData);
?>
```

## Troubleshooting

- **Wi-Fi Connection Issues**: Ensure that the ESP32 is within range of the Wi-Fi network and that the credentials are correct.
- **Data Not Displaying**: Check the server URL in the code and ensure the server is running and accessible.

## Contributing

Contributions are welcome! If you have suggestions or improvements, feel free to open an issue or submit a pull request.

## License

This project is licensed under the GNU General Public License v3.0. See the [LICENSE](LICENSE) file for details.


## Acknowledgments

- Thanks to the Arduino community for their support and resources.
- Special thanks to the creators of the HTU21D sensor and the libraries used in this project.

---

Feel free to customize any sections to better fit your project specifics or personal preferences!
