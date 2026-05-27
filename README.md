# IoT-Based Smart Industry Monitoring and Alerting System

> Major project submitted in partial fulfilment of the requirements for the degree of **B.Tech in Computer Science and Engineering**, Semester 8, **SRM Institute of Science and Technology, Vadapalani Campus**.

An end-to-end IoT system that continuously monitors critical industrial environmental parameters — temperature, humidity, gas concentration, and more — using sensor-equipped Arduino hardware, transmits the readings to a cloud-connected web server, and triggers real-time alerts when readings cross safety thresholds. Operators can view live status through a web dashboard from anywhere.

## Problem statement

Industrial environments face constant risk from gas leaks, overheating, and hazardous condition build-up. Traditional monitoring relies on manual rounds or isolated alarm panels — slow to detect, slow to escalate, and easy to miss outside working hours. The cost of a missed alert can be measured in lives, equipment, and downtime.

This project addresses that gap with an IoT-based system that:

- Senses key environmental parameters continuously
- Streams readings to a centralized web dashboard
- Triggers automated alerts the moment a reading breaches a safe threshold
- Lets supervisors monitor multiple sensor nodes remotely from any browser

## System architecture

```
   ┌────────────────────┐       ┌─────────────────┐       ┌────────────────────┐
   │   Sensor Layer     │       │  Communication  │       │    Application     │
   │  (Arduino + sensors)│ ───→ │      Layer      │ ───→ │       Layer        │
   │ Temp · Humidity ·   │       │  (Wi-Fi / IoT   │       │  Web dashboard +   │
   │     Gas · etc.      │       │     gateway)    │       │   alert engine     │
   └────────────────────┘       └─────────────────┘       └────────────────────┘
                                                                    │
                                                                    ▼
                                                          ┌──────────────────┐
                                                          │  User / Operator │
                                                          │  (browser / SMS) │
                                                          └──────────────────┘
```

## Tech stack

| Layer | Technology |
|-------|-----------|
| Microcontroller | Arduino |
| Sensors | Temperature, humidity, gas (MQ-series), and additional environmental sensors |
| Backend | PHP |
| Frontend | HTML, CSS, SCSS, JavaScript |
| Communication | Wi-Fi / serial-to-IP gateway |
| Data flow | Sensor → Arduino → HTTP request → PHP server → Web dashboard |

## Repository contents

| Folder | What's inside |
|--------|---------------|
| `arduino CODE/` | Embedded firmware: sensor reading loop, threshold checks, and HTTP transmission logic |
| `web page codes/` | The full web dashboard — PHP backend, CSS/SCSS styling, JavaScript for live updates |
| `Review - 1/` | Phase 1 deliverable — problem identification, literature survey, proposed architecture |
| `Review - 2/` | Phase 2 deliverable — design specification, hardware/software selection, prototype work |
| `Review - 3/` | Phase 3 deliverable — implementation, testing results, and final integration |
| `Project Report Book with Plagiarism Report/` | The final thesis document submitted to the university, with plagiarism check |
| `Final Viva Presentation PPT/` | Slide deck presented at the final viva voce examination |
| `Paper and Publication Details/` | Research paper drafted from this work and publication-related artifacts |

## How it works

1. **Sensing.** The Arduino reads from connected environmental sensors at a fixed interval. Each reading is compared against pre-configured safe thresholds defined in the firmware.
2. **Transmission.** Readings are packaged and sent over Wi-Fi to the PHP backend hosted on a web server.
3. **Storage and display.** The backend logs each reading and exposes a live dashboard. Operators see the current state of every sensor node along with historical trends.
4. **Alerting.** When a reading crosses a danger threshold, the system flags the dashboard in alert mode and (depending on configuration) triggers an outbound notification.
5. **Action.** Operators can respond remotely, escalate to the right team, and review what happened after the fact through the logged data.

## How to set it up

### Hardware
1. Wire the sensors to the Arduino following the pin assignments documented inside `arduino CODE/`.
2. Open the Arduino sketch in the Arduino IDE.
3. Update the Wi-Fi credentials and the URL of your PHP server endpoint.
4. Upload the sketch to the board.

### Web dashboard
1. Copy the contents of `web page codes/` to your PHP-capable web host (XAMPP, WAMP, or any LAMP server works).
2. Update database connection parameters in the configuration file.
3. Run the included SQL schema to create the sensor-reading tables.
4. Open the dashboard URL in a browser. As soon as the Arduino starts transmitting, readings appear live.

## Key features

- **Real-time monitoring.** Continuous sensor readings visible from any browser.
- **Configurable thresholds.** Alert levels defined per parameter, easy to tune for different industrial settings.
- **Remote access.** No need for operators to be physically on-site.
- **Historical logging.** Every reading is stored, enabling trend analysis and post-incident review.
- **Low-cost hardware.** Built on Arduino and commodity sensors, deployable at scale.

## Academic context

- **Institution:** SRM Institute of Science and Technology, Vadapalani Campus
- **Programme:** B.Tech in Computer Science and Engineering
- **Semester:** 8 (final-year major project)
- **Deliverables:** Three staged reviews, a final project report with plagiarism verification, a viva-voce presentation, and a research paper drafted for publication

## Future scope

- **Mobile app** for push notifications instead of browser-based alerts only
- **Machine learning** for predictive maintenance — forecasting parameter drift before it crosses a threshold
- **Edge processing** on more capable boards (ESP32, Raspberry Pi) to reduce cloud dependency
- **Multi-site dashboard** supporting many facilities under a single operator view

## Author

**Kishore Madanagopal**
B.Tech CSE, SRM Institute of Science and Technology, Vadapalani Campus
