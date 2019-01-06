# Microservices with Lumen

 This is a part of a huge project I was building for a client.
 In this small example I have effectively explained and work with almost all the features of microsurvices architecture.
 
 The Main system is __LumenApiGateway__ and the microservices are __LumenAuthorApi__ & __LumenBookApi__.
 I am using guzzle for consuming api and dusterio/lumen-passport for security.
 
  Also stopping direct access to the microservices, to access the microservies directly
  the client must pass some kind of token which is registered in the microservice. 
 