# Lab 4 - Dockerized Programs

This repository contains two Dockerfiles for Lab 4:
1. A C program (`lab4_lab2cprogram`)
2. A website (`lab4_image`)

Both images are published on Docker Hub under my account: [mb6ff](https://hub.docker.com/u/mb6ff).

---

## How to Run from Dockerhub

## NOTES: 
Run these commands in Windows PowerShell or a terminal with Docker installed
The Docker images were built on an ARM64 system, which is why the --platform linux/arm64 flag is required.
 
### 1. C Program
docker run --rm -it --platform linux/arm64 mb6ff/lab4_lab2cprogram ./program


### 2. Website
docker run --rm -it --platform linux/arm64 -p 8080:80 mb6ff/lab4_image

