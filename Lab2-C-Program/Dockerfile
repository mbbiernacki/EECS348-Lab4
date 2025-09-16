FROM gcc:latest

# set the working directory inside the container
WORKDIR /usr/src/app

# copy everything from your cprog folder into the container
COPY . .

# build using your Makefile
RUN make

# run the program by default
CMD ["./main"]
