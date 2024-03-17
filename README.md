[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)



# Enviro-board sensors for microprocessor

The work is based on the concept of IoT, the creation of meteorological stations that communicate with each other wirelessly. The final variant consists of two types of network. Local network and public. A local network consists of individual weather stations that collect data such as temperature and pressure, which are sent over the network. The local mesh is created by the painlessMesh library. The connection between the local and public network is made by the gateway. A gateway is a pair of development boards that are connected by a UART serial port. A web application with a database for collecting and displaying measured data was implemented in the public network. The gateway sends measured data from individual stations to this web application.



![fullScheme drawio](https://github.com/xshevtsov/mesh_weather_stations/assets/79197893/ee9a763a-4e52-4ef3-b975-b24d8b820086)

![interfaceSite](https://github.com/xshevtsov/mesh_weather_stations/assets/79197893/ccb593e0-8bdd-49ef-8966-82f3f1749729)



## Station 
The station consists of a power module, display, development board, environmental sensor, indicator buzzer, and button.


![StationArrowScheme1](https://github.com/xshevtsov/mesh_weather_stations/assets/79197893/b9a4d7fd-894f-4c66-8629-34f5e26da909)

## Station functionality

- Display mode of current measured data
- Display mode of current connected state
- Sound indication
- 4 ways to power station


## Gateway 
The station consists of a power module, display, development board, environmental sensor, indicator buzzer, and button.

![serverIrl](https://github.com/xshevtsov/mesh_weather_stations/assets/79197893/1033d54e-2936-4c6e-8213-5a2a06806d31)

## Gateway functionality

- UART communication
- Constructing JSON data
- Sound indication
- Display of constructed data


## Deployment

To deploy this project run

```bash
  description witch code goes where
```


## Documentation

[Documentation](https://linktodocumentation)




