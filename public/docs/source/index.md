---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#Controlador para el cliente

Controlador para el cliente
<!-- START_cd859e443c77bc015eee5bfbb16219ec -->
## etodo que lista todos los clientes de una constructora esta validado por el id de la constructora

> Example request:

```bash
curl -X GET "http://localhost/api/v1/clientes" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/clientes",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/clientes`

`HEAD api/v1/clientes`


<!-- END_cd859e443c77bc015eee5bfbb16219ec -->

<!-- START_4a09aed823a64011eaf111bbc77ba7ab -->
## Metodo store para crear un nuevo Cliente.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/clientes" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/clientes",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/clientes`


<!-- END_4a09aed823a64011eaf111bbc77ba7ab -->

<!-- START_9b16a89e3db738d244629ac33a826af8 -->
## Obtener los clientes .

> Example request:

```bash
curl -X GET "http://localhost/api/v1/clientes/{cliente}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/clientes/{cliente}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/clientes/{cliente}`

`HEAD api/v1/clientes/{cliente}`


<!-- END_9b16a89e3db738d244629ac33a826af8 -->

<!-- START_b60f8184713dddc04bba29f9a4cc1d53 -->
## Actualizar CLiente.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/clientes/{cliente}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/clientes/{cliente}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/clientes/{cliente}`

`PATCH api/v1/clientes/{cliente}`


<!-- END_b60f8184713dddc04bba29f9a4cc1d53 -->

<!-- START_4fbad517a4ec71d01e26e8002e4a6f6b -->
## Eliminar cliente.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/clientes/{cliente}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/clientes/{cliente}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/clientes/{cliente}`


<!-- END_4fbad517a4ec71d01e26e8002e4a6f6b -->

#general
<!-- START_ddc2150dc4d2f28bb0430ab9d8409ca8 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/areas" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/areas",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "descripcion": "operario"
    },
    {
        "id": 2,
        "descripcion": "operador"
    }
]
```

### HTTP Request
`GET api/v1/areas`

`HEAD api/v1/areas`


<!-- END_ddc2150dc4d2f28bb0430ab9d8409ca8 -->

<!-- START_b54e1942dfc0b8b1d696772210c13dda -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/areas" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/areas",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/areas`


<!-- END_b54e1942dfc0b8b1d696772210c13dda -->

<!-- START_068fa3638ba4174a09e1ffcd7e0a343b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/areas/{area}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/areas/{area}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/areas/{area}`

`HEAD api/v1/areas/{area}`


<!-- END_068fa3638ba4174a09e1ffcd7e0a343b -->

<!-- START_1e0053e686dee6fdad69501d8439f623 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/areas/{area}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/areas/{area}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/areas/{area}`

`PATCH api/v1/areas/{area}`


<!-- END_1e0053e686dee6fdad69501d8439f623 -->

<!-- START_dd5bf1990e6065fd462a40721d204191 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/areas/{area}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/areas/{area}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/areas/{area}`


<!-- END_dd5bf1990e6065fd462a40721d204191 -->

<!-- START_dccb4f60a1a769ffe22b22011ac3acb1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/empresas" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/empresas",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/empresas`

`HEAD api/v1/empresas`


<!-- END_dccb4f60a1a769ffe22b22011ac3acb1 -->

<!-- START_58bb78eaca2e8d96b491afac006995f1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/empresas" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/empresas",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/empresas`


<!-- END_58bb78eaca2e8d96b491afac006995f1 -->

<!-- START_d0bf8fb60fff1c4ca48d9b215d810cd6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/empresas/{empresa}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/empresas/{empresa}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/empresas/{empresa}`

`HEAD api/v1/empresas/{empresa}`


<!-- END_d0bf8fb60fff1c4ca48d9b215d810cd6 -->

<!-- START_d516440e299556f5bd64d9ae3f6f8679 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/empresas/{empresa}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/empresas/{empresa}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/empresas/{empresa}`

`PATCH api/v1/empresas/{empresa}`


<!-- END_d516440e299556f5bd64d9ae3f6f8679 -->

<!-- START_552a4a590b86850e1bbd31c2e413b731 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/empresas/{empresa}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/empresas/{empresa}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/empresas/{empresa}`


<!-- END_552a4a590b86850e1bbd31c2e413b731 -->

<!-- START_773f27a4cf717fe1f6b15a7fdef20e75 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/formasPago" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/formasPago",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/formasPago`

`HEAD api/v1/formasPago`


<!-- END_773f27a4cf717fe1f6b15a7fdef20e75 -->

<!-- START_c01001480fea2ed5ff27b02ae3dd84d3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/formasPago" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/formasPago",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/formasPago`


<!-- END_c01001480fea2ed5ff27b02ae3dd84d3 -->

<!-- START_080fcf97bd9326157d3566961a4fbaff -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/formasPago/{formasPago}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/formasPago/{formasPago}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/formasPago/{formasPago}`

`HEAD api/v1/formasPago/{formasPago}`


<!-- END_080fcf97bd9326157d3566961a4fbaff -->

<!-- START_81243c6647f9b17f19fe834f8aa4f38f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/formasPago/{formasPago}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/formasPago/{formasPago}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/formasPago/{formasPago}`

`PATCH api/v1/formasPago/{formasPago}`


<!-- END_81243c6647f9b17f19fe834f8aa4f38f -->

<!-- START_848d3d699679110bfb7b0953faa57779 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/formasPago/{formasPago}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/formasPago/{formasPago}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/formasPago/{formasPago}`


<!-- END_848d3d699679110bfb7b0953faa57779 -->

<!-- START_6cb5fef850c2ae6d0de134a3409a8f1a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/items" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/items",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/items`

`HEAD api/v1/items`


<!-- END_6cb5fef850c2ae6d0de134a3409a8f1a -->

<!-- START_7bd5f07d9ba801bd8687585c8cb91196 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/items" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/items",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/items`


<!-- END_7bd5f07d9ba801bd8687585c8cb91196 -->

<!-- START_c82686db284c3bd830a93127392241c8 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/items/{item}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/items/{item}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/items/{item}`

`HEAD api/v1/items/{item}`


<!-- END_c82686db284c3bd830a93127392241c8 -->

<!-- START_919e8dbbe3f5f30687dcab2e5ab9877a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/items/{item}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/items/{item}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/items/{item}`

`PATCH api/v1/items/{item}`


<!-- END_919e8dbbe3f5f30687dcab2e5ab9877a -->

<!-- START_ba04c1a1da1988c5ceb2a873e3c8632d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/items/{item}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/items/{item}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/items/{item}`


<!-- END_ba04c1a1da1988c5ceb2a873e3c8632d -->

<!-- START_3c0ffefb0582dd92c840f408aad31d30 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/maquinarias" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/maquinarias",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/maquinarias`

`HEAD api/v1/maquinarias`


<!-- END_3c0ffefb0582dd92c840f408aad31d30 -->

<!-- START_26cf3e6702f9ce51ad54d5fbeeab8c54 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/maquinarias" \
-H "Accept: application/json" \
    -d "identificacion"="reiciendis" \
    -d "descripcion"="reiciendis" \
    -d "numero_serie"="reiciendis" \
    -d "patente"="reiciendis" \
    -d "anho"="reiciendis" \
    -d "ubicacion_id"="reiciendis" \
    -d "rendimiento_id"="reiciendis" \
    -d "modelo_id"="reiciendis" \
    -d "marca_id"="reiciendis" \
    -d "constructora_id"="reiciendis" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/maquinarias",
    "method": "POST",
    "data": {
        "identificacion": "reiciendis",
        "descripcion": "reiciendis",
        "numero_serie": "reiciendis",
        "patente": "reiciendis",
        "anho": "reiciendis",
        "ubicacion_id": "reiciendis",
        "rendimiento_id": "reiciendis",
        "modelo_id": "reiciendis",
        "marca_id": "reiciendis",
        "constructora_id": "reiciendis"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/maquinarias`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    identificacion | string |  required  | 
    descripcion | string |  optional  | 
    numero_serie | string |  optional  | Only alpha-numeric characters allowed
    patente | string |  required  | 
    anho | string |  optional  | 
    ubicacion_id | string |  optional  | 
    rendimiento_id | string |  optional  | 
    modelo_id | string |  optional  | 
    marca_id | string |  required  | 
    constructora_id | string |  optional  | 

<!-- END_26cf3e6702f9ce51ad54d5fbeeab8c54 -->

<!-- START_d79f1318b151f7de60b60ae582bbc7a4 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/maquinarias/{maquinaria}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/maquinarias/{maquinaria}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/maquinarias/{maquinaria}`

`HEAD api/v1/maquinarias/{maquinaria}`


<!-- END_d79f1318b151f7de60b60ae582bbc7a4 -->

<!-- START_cdda9177535557ad5ce0576e3defcec2 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/maquinarias/{maquinaria}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/maquinarias/{maquinaria}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/maquinarias/{maquinaria}`

`PATCH api/v1/maquinarias/{maquinaria}`


<!-- END_cdda9177535557ad5ce0576e3defcec2 -->

<!-- START_8617441a6413e4866c93e5264b9371e4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/maquinarias/{maquinaria}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/maquinarias/{maquinaria}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/maquinarias/{maquinaria}`


<!-- END_8617441a6413e4866c93e5264b9371e4 -->

<!-- START_c9401a2907a214e7f40ae42a68ff9d74 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/maquinariasObra" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/maquinariasObra",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/maquinariasObra`

`HEAD api/v1/maquinariasObra`


<!-- END_c9401a2907a214e7f40ae42a68ff9d74 -->

<!-- START_bf38444d1e2e7dd3c4b6dd68c3d5ef1d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/maquinariasObra" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/maquinariasObra",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/maquinariasObra`


<!-- END_bf38444d1e2e7dd3c4b6dd68c3d5ef1d -->

<!-- START_c60def972fca82fc79c543de8bc6d014 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/maquinariasObra/{maquinariasObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/maquinariasObra/{maquinariasObra}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/maquinariasObra/{maquinariasObra}`

`HEAD api/v1/maquinariasObra/{maquinariasObra}`


<!-- END_c60def972fca82fc79c543de8bc6d014 -->

<!-- START_dc25e447019c6e1c99c30c7f49fff966 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/maquinariasObra/{maquinariasObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/maquinariasObra/{maquinariasObra}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/maquinariasObra/{maquinariasObra}`

`PATCH api/v1/maquinariasObra/{maquinariasObra}`


<!-- END_dc25e447019c6e1c99c30c7f49fff966 -->

<!-- START_bce1d60378b73cd27ec1162e13f1a36a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/maquinariasObra/{maquinariasObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/maquinariasObra/{maquinariasObra}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/maquinariasObra/{maquinariasObra}`


<!-- END_bce1d60378b73cd27ec1162e13f1a36a -->

<!-- START_fd22a00e66ee2bdd5833af91263f3355 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/materiales" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/materiales",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/materiales`

`HEAD api/v1/materiales`


<!-- END_fd22a00e66ee2bdd5833af91263f3355 -->

<!-- START_5663c951717fb41440c113762005caae -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/materiales" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/materiales",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/materiales`


<!-- END_5663c951717fb41440c113762005caae -->

<!-- START_ed61c5591731bbfcd438a224e6774ce0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/materiales/{materiale}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/materiales/{materiale}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/materiales/{materiale}`

`HEAD api/v1/materiales/{materiale}`


<!-- END_ed61c5591731bbfcd438a224e6774ce0 -->

<!-- START_f4edbeb68a80725db8f02b46c4ac9452 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/materiales/{materiale}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/materiales/{materiale}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/materiales/{materiale}`

`PATCH api/v1/materiales/{materiale}`


<!-- END_f4edbeb68a80725db8f02b46c4ac9452 -->

<!-- START_bd3c8b273d30246fd5206c112fdebb90 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/materiales/{materiale}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/materiales/{materiale}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/materiales/{materiale}`


<!-- END_bd3c8b273d30246fd5206c112fdebb90 -->

<!-- START_b889ed0d4a3706823d1637874727ac48 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/materialesObra" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/materialesObra",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/materialesObra`

`HEAD api/v1/materialesObra`


<!-- END_b889ed0d4a3706823d1637874727ac48 -->

<!-- START_db3152ea4c973091606b45d1893e799f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/materialesObra" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/materialesObra",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/materialesObra`


<!-- END_db3152ea4c973091606b45d1893e799f -->

<!-- START_815f0e2dcb3152679df2bcf080172208 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/materialesObra/{materialesObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/materialesObra/{materialesObra}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/materialesObra/{materialesObra}`

`HEAD api/v1/materialesObra/{materialesObra}`


<!-- END_815f0e2dcb3152679df2bcf080172208 -->

<!-- START_4e22feff342bc07623eabdfeeb8b4d1d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/materialesObra/{materialesObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/materialesObra/{materialesObra}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/materialesObra/{materialesObra}`

`PATCH api/v1/materialesObra/{materialesObra}`


<!-- END_4e22feff342bc07623eabdfeeb8b4d1d -->

<!-- START_7448ee8f67f38e09e9417b380d315f89 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/materialesObra/{materialesObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/materialesObra/{materialesObra}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/materialesObra/{materialesObra}`


<!-- END_7448ee8f67f38e09e9417b380d315f89 -->

<!-- START_c0bb0f94da5495d0212c13ccf74bace9 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/obras" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/obras",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/obras`

`HEAD api/v1/obras`


<!-- END_c0bb0f94da5495d0212c13ccf74bace9 -->

<!-- START_999a69f26c668a00f4165fe5d89d253e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/obras" \
-H "Accept: application/json" \
    -d "nombre"="repellat" \
    -d "direccion"="repellat" \
    -d "fecha_ini"="2017-09-25" \
    -d "fecha_fin"="2017-09-25" \
    -d "imagen"="repellat" \
    -d "ciudad"="repellat" \
    -d "cliente_id"="repellat" \
    -d "tipo_obra_id"="repellat" \
    -d "constructora_id"="repellat" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/obras",
    "method": "POST",
    "data": {
        "nombre": "repellat",
        "direccion": "repellat",
        "fecha_ini": "2017-09-25",
        "fecha_fin": "2017-09-25",
        "imagen": "repellat",
        "ciudad": "repellat",
        "cliente_id": "repellat",
        "tipo_obra_id": "repellat",
        "constructora_id": "repellat"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/obras`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    nombre | string |  required  | 
    direccion | string |  required  | 
    fecha_ini | date |  optional  | 
    fecha_fin | date |  optional  | 
    imagen | string |  optional  | 
    ciudad | string |  optional  | 
    cliente_id | string |  required  | 
    tipo_obra_id | string |  required  | 
    constructora_id | string |  optional  | 

<!-- END_999a69f26c668a00f4165fe5d89d253e -->

<!-- START_a98cddb1ca435f5a50df19de3773a10a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/obras/{obra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/obras/{obra}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/obras/{obra}`

`HEAD api/v1/obras/{obra}`


<!-- END_a98cddb1ca435f5a50df19de3773a10a -->

<!-- START_d2773c9a9ed0a4db0f9527316b7b737d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/obras/{obra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/obras/{obra}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/obras/{obra}`

`PATCH api/v1/obras/{obra}`


<!-- END_d2773c9a9ed0a4db0f9527316b7b737d -->

<!-- START_479855e139f35e24ec6e807b4a41fb70 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/obras/{obra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/obras/{obra}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/obras/{obra}`


<!-- END_479855e139f35e24ec6e807b4a41fb70 -->

<!-- START_af5728433a51db9853e2083639b48dae -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/partidas" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partidas",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/partidas`

`HEAD api/v1/partidas`


<!-- END_af5728433a51db9853e2083639b48dae -->

<!-- START_9ef6015787d231f252fbccf20773ae82 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/partidas" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partidas",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/partidas`


<!-- END_9ef6015787d231f252fbccf20773ae82 -->

<!-- START_ca838efcd7ef7a0178cecedef0e1153f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/partidas/{partida}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partidas/{partida}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/partidas/{partida}`

`HEAD api/v1/partidas/{partida}`


<!-- END_ca838efcd7ef7a0178cecedef0e1153f -->

<!-- START_c4411ae9686f9d562c884bb2f3196109 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/partidas/{partida}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partidas/{partida}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/partidas/{partida}`

`PATCH api/v1/partidas/{partida}`


<!-- END_c4411ae9686f9d562c884bb2f3196109 -->

<!-- START_8e2188eb02b4a90a484591a21ed5c180 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/partidas/{partida}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/partidas/{partida}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/partidas/{partida}`


<!-- END_8e2188eb02b4a90a484591a21ed5c180 -->

<!-- START_fe43fa4b55c8988e4593078a0cb20456 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/presupuestos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/presupuestos",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/presupuestos`

`HEAD api/v1/presupuestos`


<!-- END_fe43fa4b55c8988e4593078a0cb20456 -->

<!-- START_66fcacad1d0c85e7f4393798bccc37d3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/presupuestos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/presupuestos",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/presupuestos`


<!-- END_66fcacad1d0c85e7f4393798bccc37d3 -->

<!-- START_ce80906cd6b902d26c7b02afc762910d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/presupuestos/{presupuesto}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/presupuestos/{presupuesto}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/presupuestos/{presupuesto}`

`HEAD api/v1/presupuestos/{presupuesto}`


<!-- END_ce80906cd6b902d26c7b02afc762910d -->

<!-- START_780548ee320bf1950b6da985f07e31eb -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/presupuestos/{presupuesto}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/presupuestos/{presupuesto}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/presupuestos/{presupuesto}`

`PATCH api/v1/presupuestos/{presupuesto}`


<!-- END_780548ee320bf1950b6da985f07e31eb -->

<!-- START_5425cbd11cd73512c5d758a9b33c3753 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/presupuestos/{presupuesto}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/presupuestos/{presupuesto}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/presupuestos/{presupuesto}`


<!-- END_5425cbd11cd73512c5d758a9b33c3753 -->

<!-- START_362cab752a1b41818761fa5f3affa6d9 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/proveedores" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/proveedores",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/v1/proveedores`

`HEAD api/v1/proveedores`


<!-- END_362cab752a1b41818761fa5f3affa6d9 -->

<!-- START_073c9030b566edfba2fa6dd7d932f7f8 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/proveedores" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/proveedores",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/proveedores`


<!-- END_073c9030b566edfba2fa6dd7d932f7f8 -->

<!-- START_9ea10e83fad8478f80b0f104bc47be0d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/proveedores/{proveedore}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/proveedores/{proveedore}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/proveedores/{proveedore}`

`HEAD api/v1/proveedores/{proveedore}`


<!-- END_9ea10e83fad8478f80b0f104bc47be0d -->

<!-- START_2eec6d21f19658235ada4fe6a0c4854a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/proveedores/{proveedore}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/proveedores/{proveedore}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/proveedores/{proveedore}`

`PATCH api/v1/proveedores/{proveedore}`


<!-- END_2eec6d21f19658235ada4fe6a0c4854a -->

<!-- START_c44714ed0f2f53f2b2585749b6bf22f2 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/proveedores/{proveedore}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/proveedores/{proveedore}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/proveedores/{proveedore}`


<!-- END_c44714ed0f2f53f2b2585749b6bf22f2 -->

<!-- START_076d04bbe621b5610f171b3adec3e9d4 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/rendimientos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/rendimientos",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/rendimientos`

`HEAD api/v1/rendimientos`


<!-- END_076d04bbe621b5610f171b3adec3e9d4 -->

<!-- START_92685e09dc8f480845ad78479121fb60 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/rendimientos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/rendimientos",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/rendimientos`


<!-- END_92685e09dc8f480845ad78479121fb60 -->

<!-- START_65559d2f7b5cca4efe40467454d42373 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/rendimientos/{rendimiento}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/rendimientos/{rendimiento}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/rendimientos/{rendimiento}`

`HEAD api/v1/rendimientos/{rendimiento}`


<!-- END_65559d2f7b5cca4efe40467454d42373 -->

<!-- START_3315922fd8078ea316f89a5d512e1ea6 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/rendimientos/{rendimiento}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/rendimientos/{rendimiento}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/rendimientos/{rendimiento}`

`PATCH api/v1/rendimientos/{rendimiento}`


<!-- END_3315922fd8078ea316f89a5d512e1ea6 -->

<!-- START_99e3f968766e51846b1a6aa30a9d069b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/rendimientos/{rendimiento}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/rendimientos/{rendimiento}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/rendimientos/{rendimiento}`


<!-- END_99e3f968766e51846b1a6aa30a9d069b -->

<!-- START_e44b4db936098b48d74478dc18ac1fc0 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/tiposObra" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tiposObra",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/tiposObra`

`HEAD api/v1/tiposObra`


<!-- END_e44b4db936098b48d74478dc18ac1fc0 -->

<!-- START_64f4746e388ff413ca3a40fe0af03a75 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/tiposObra" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tiposObra",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/tiposObra`


<!-- END_64f4746e388ff413ca3a40fe0af03a75 -->

<!-- START_bf676ce58c78fbd405cd5cd300872c68 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/tiposObra/{tiposObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tiposObra/{tiposObra}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/tiposObra/{tiposObra}`

`HEAD api/v1/tiposObra/{tiposObra}`


<!-- END_bf676ce58c78fbd405cd5cd300872c68 -->

<!-- START_6113d9d1576e898d498b3498732157a8 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/tiposObra/{tiposObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tiposObra/{tiposObra}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/tiposObra/{tiposObra}`

`PATCH api/v1/tiposObra/{tiposObra}`


<!-- END_6113d9d1576e898d498b3498732157a8 -->

<!-- START_2f952016df02566017c4f845cc5e563a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/tiposObra/{tiposObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/tiposObra/{tiposObra}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/tiposObra/{tiposObra}`


<!-- END_2f952016df02566017c4f845cc5e563a -->

<!-- START_45c8920b5c41c331e23ffeac6af8c850 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/trabajadores" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trabajadores",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/trabajadores`

`HEAD api/v1/trabajadores`


<!-- END_45c8920b5c41c331e23ffeac6af8c850 -->

<!-- START_822d40157465411a88188c858913d984 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/trabajadores" \
-H "Accept: application/json" \
    -d "sueldo"="eius" \
    -d "fecha_ini"="1980-05-25" \
    -d "estado"="eius" \
    -d "rendimiento_id"="eius" \
    -d "area_id"="eius" \
    -d "persona_id"="eius" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trabajadores",
    "method": "POST",
    "data": {
        "sueldo": "eius",
        "fecha_ini": "1980-05-25",
        "estado": "eius",
        "rendimiento_id": "eius",
        "area_id": "eius",
        "persona_id": "eius"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/trabajadores`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    sueldo | string |  optional  | 
    fecha_ini | date |  required  | 
    estado | string |  required  | 
    rendimiento_id | string |  optional  | 
    area_id | string |  optional  | 
    persona_id | string |  required  | 

<!-- END_822d40157465411a88188c858913d984 -->

<!-- START_ff1798315b5b1040b4b38f92a7fc28bb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/trabajadores/{trabajadore}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trabajadores/{trabajadore}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/trabajadores/{trabajadore}`

`HEAD api/v1/trabajadores/{trabajadore}`


<!-- END_ff1798315b5b1040b4b38f92a7fc28bb -->

<!-- START_81022077f0c26dfc712677cdca9c6743 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/trabajadores/{trabajadore}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trabajadores/{trabajadore}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/trabajadores/{trabajadore}`

`PATCH api/v1/trabajadores/{trabajadore}`


<!-- END_81022077f0c26dfc712677cdca9c6743 -->

<!-- START_c20b1db0c92a18d7854cfc8081ad9f40 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/trabajadores/{trabajadore}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trabajadores/{trabajadore}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/trabajadores/{trabajadore}`


<!-- END_c20b1db0c92a18d7854cfc8081ad9f40 -->

<!-- START_de364f55f991be984c9f333dc8a83f2c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/trabajadoresObra" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trabajadoresObra",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/trabajadoresObra`

`HEAD api/v1/trabajadoresObra`


<!-- END_de364f55f991be984c9f333dc8a83f2c -->

<!-- START_0d373387c197ffe4c307e56835310ad8 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/trabajadoresObra" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trabajadoresObra",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/trabajadoresObra`


<!-- END_0d373387c197ffe4c307e56835310ad8 -->

<!-- START_59e7efad947d990313b1f55bbd517a55 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/trabajadoresObra/{trabajadoresObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trabajadoresObra/{trabajadoresObra}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/trabajadoresObra/{trabajadoresObra}`

`HEAD api/v1/trabajadoresObra/{trabajadoresObra}`


<!-- END_59e7efad947d990313b1f55bbd517a55 -->

<!-- START_c048fdd7d91e60ea381cfd30bbf8dc85 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/trabajadoresObra/{trabajadoresObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trabajadoresObra/{trabajadoresObra}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/trabajadoresObra/{trabajadoresObra}`

`PATCH api/v1/trabajadoresObra/{trabajadoresObra}`


<!-- END_c048fdd7d91e60ea381cfd30bbf8dc85 -->

<!-- START_045a43554b4cec4ed7f62a96ec38183a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/trabajadoresObra/{trabajadoresObra}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trabajadoresObra/{trabajadoresObra}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/trabajadoresObra/{trabajadoresObra}`


<!-- END_045a43554b4cec4ed7f62a96ec38183a -->

<!-- START_95c286f3753f4593a55ccce0bb6163e2 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/ubicaciones" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/ubicaciones",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/ubicaciones`

`HEAD api/v1/ubicaciones`


<!-- END_95c286f3753f4593a55ccce0bb6163e2 -->

<!-- START_84f3e8409189e0350a0358147bba9da4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/ubicaciones" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/ubicaciones",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/ubicaciones`


<!-- END_84f3e8409189e0350a0358147bba9da4 -->

<!-- START_a938c69354751abe1a324af1af572da1 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/ubicaciones/{ubicacione}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/ubicaciones/{ubicacione}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/ubicaciones/{ubicacione}`

`HEAD api/v1/ubicaciones/{ubicacione}`


<!-- END_a938c69354751abe1a324af1af572da1 -->

<!-- START_f02b71c004fd5564f0d6cd3cb1d81d1a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/ubicaciones/{ubicacione}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/ubicaciones/{ubicacione}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/ubicaciones/{ubicacione}`

`PATCH api/v1/ubicaciones/{ubicacione}`


<!-- END_f02b71c004fd5564f0d6cd3cb1d81d1a -->

<!-- START_0eb6928d94f5c35622b0fdd076e0e763 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/ubicaciones/{ubicacione}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/ubicaciones/{ubicacione}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/ubicaciones/{ubicacione}`


<!-- END_0eb6928d94f5c35622b0fdd076e0e763 -->

<!-- START_2f655c79ad0f111ec26e4c2878da35d7 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/usuarios" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/usuarios",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/usuarios`

`HEAD api/v1/usuarios`


<!-- END_2f655c79ad0f111ec26e4c2878da35d7 -->

<!-- START_742906f556a5ad4a75a6330f10648998 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/usuarios" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/usuarios",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/usuarios`


<!-- END_742906f556a5ad4a75a6330f10648998 -->

<!-- START_60733c8e5d83ab037b063ee3c78578d7 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/usuarios/{usuario}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/usuarios/{usuario}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/usuarios/{usuario}`

`HEAD api/v1/usuarios/{usuario}`


<!-- END_60733c8e5d83ab037b063ee3c78578d7 -->

<!-- START_0b54108643fce12dee140e39debb093f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/usuarios/{usuario}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/usuarios/{usuario}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/usuarios/{usuario}`

`PATCH api/v1/usuarios/{usuario}`


<!-- END_0b54108643fce12dee140e39debb093f -->

<!-- START_6044ffe2b68f6045d73f6bb523147231 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/usuarios/{usuario}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/usuarios/{usuario}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/usuarios/{usuario}`


<!-- END_6044ffe2b68f6045d73f6bb523147231 -->

<!-- START_1f785b0dcf57886fadfda28b50d3dac3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/vendedores" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vendedores",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/vendedores`

`HEAD api/v1/vendedores`


<!-- END_1f785b0dcf57886fadfda28b50d3dac3 -->

<!-- START_dff97f93295262ebea518aa1f108b35f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/vendedores" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vendedores",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/vendedores`


<!-- END_dff97f93295262ebea518aa1f108b35f -->

<!-- START_13d7112056890d2d67a46e74e870b8eb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/vendedores/{vendedore}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vendedores/{vendedore}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/vendedores/{vendedore}`

`HEAD api/v1/vendedores/{vendedore}`


<!-- END_13d7112056890d2d67a46e74e870b8eb -->

<!-- START_837e064b2ab4b1e5b4f7e150cd48a392 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/vendedores/{vendedore}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vendedores/{vendedore}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/vendedores/{vendedore}`

`PATCH api/v1/vendedores/{vendedore}`


<!-- END_837e064b2ab4b1e5b4f7e150cd48a392 -->

<!-- START_d886db958c4b86b2df35e760082d9203 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/vendedores/{vendedore}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vendedores/{vendedore}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/vendedores/{vendedore}`


<!-- END_d886db958c4b86b2df35e760082d9203 -->

<!-- START_47a29cf9e57448e01c1f57dbf4757a67 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/marcas" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/marcas",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/marcas`

`HEAD api/v1/marcas`


<!-- END_47a29cf9e57448e01c1f57dbf4757a67 -->

<!-- START_889c914eeddd7d199ae256c544a39b39 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/marcas" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/marcas",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/marcas`


<!-- END_889c914eeddd7d199ae256c544a39b39 -->

<!-- START_0dfadc2ea9394c3ad3c5bc1fe1d7ae37 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/marcas/{marca}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/marcas/{marca}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/marcas/{marca}`

`HEAD api/v1/marcas/{marca}`


<!-- END_0dfadc2ea9394c3ad3c5bc1fe1d7ae37 -->

<!-- START_00bc28bb3eeb1da7bd74b6c43475e852 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/marcas/{marca}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/marcas/{marca}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/marcas/{marca}`

`PATCH api/v1/marcas/{marca}`


<!-- END_00bc28bb3eeb1da7bd74b6c43475e852 -->

<!-- START_9304f8e69b9c2c9b0e6bcb5b314ba851 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/marcas/{marca}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/marcas/{marca}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/marcas/{marca}`


<!-- END_9304f8e69b9c2c9b0e6bcb5b314ba851 -->

<!-- START_34dc4aae67cddbbbc77b5df1190967ec -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/estados" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/estados",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/estados`

`HEAD api/v1/estados`


<!-- END_34dc4aae67cddbbbc77b5df1190967ec -->

<!-- START_49e9d01b7a2df6b4d43f129e829260ab -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/estados" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/estados",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/estados`


<!-- END_49e9d01b7a2df6b4d43f129e829260ab -->

<!-- START_2eb1a6018a72160784a598c4053ef5cd -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/estados/{estado}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/estados/{estado}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/estados/{estado}`

`HEAD api/v1/estados/{estado}`


<!-- END_2eb1a6018a72160784a598c4053ef5cd -->

<!-- START_809d1b8c4f50916be6df244a500072b5 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/estados/{estado}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/estados/{estado}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/estados/{estado}`

`PATCH api/v1/estados/{estado}`


<!-- END_809d1b8c4f50916be6df244a500072b5 -->

<!-- START_ece6dec9f823ab54bbec9ceb86684150 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/estados/{estado}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/estados/{estado}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/estados/{estado}`


<!-- END_ece6dec9f823ab54bbec9ceb86684150 -->

<!-- START_b864cb703dcc09af1bbec1c55b569f45 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/modelos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/modelos",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/modelos`

`HEAD api/v1/modelos`


<!-- END_b864cb703dcc09af1bbec1c55b569f45 -->

<!-- START_aee42b761b2d91725feebd213e032f22 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/modelos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/modelos",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/modelos`


<!-- END_aee42b761b2d91725feebd213e032f22 -->

<!-- START_25127cd0d9db150ad2fb79f8867ce4ff -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/modelos/{modelo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/modelos/{modelo}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/modelos/{modelo}`

`HEAD api/v1/modelos/{modelo}`


<!-- END_25127cd0d9db150ad2fb79f8867ce4ff -->

<!-- START_6db141a8a18d11fe7bf6eefdaeefbe5e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/modelos/{modelo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/modelos/{modelo}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/modelos/{modelo}`

`PATCH api/v1/modelos/{modelo}`


<!-- END_6db141a8a18d11fe7bf6eefdaeefbe5e -->

<!-- START_96890a618c1e1e05e0d7b4cac0fb76c7 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/modelos/{modelo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/modelos/{modelo}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/modelos/{modelo}`


<!-- END_96890a618c1e1e05e0d7b4cac0fb76c7 -->

<!-- START_a2dcfff413899ff99db237632d866483 -->
## api/v1/obras/{obra}/presupuestos

> Example request:

```bash
curl -X GET "http://localhost/api/v1/obras/{obra}/presupuestos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/obras/{obra}/presupuestos",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\HttpException",
    "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 120,
    "trace": [
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/barryvdh\/laravel-debugbar\/src\/Middleware\/InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/app\/Http\/Middleware\/Cors.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "App\\Http\\Middleware\\Cors",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/MAMP\/htdocs\/Startup\/Constructora\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/obras/{obra}/presupuestos`

`HEAD api/v1/obras/{obra}/presupuestos`


<!-- END_a2dcfff413899ff99db237632d866483 -->

