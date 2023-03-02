# what is JSON web token 

The json web token has 3 parts 
header.payload.signature 

header -> base64url encode 
{
    "alg": "HS256"
    "typ": "JWT"
}

payload -> base64url encode 
{
    "sub": 1
    "name: "Dave"
}

signature base64url is the hash of header + payload together