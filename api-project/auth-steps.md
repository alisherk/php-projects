# Auth steps 

## Registeration
Registers user in the db. There we turn the password in the the password hash using password_hash($_POST["password"], PASSWORD_DEFAULT);

## Login
When we login we get the user by username from the db and we verify if supplied password macthes the password_hash using password_verify(strval($data["password"]), $user["password_hash"])
and we generate access_token like so $access_token = base64_encode(json_encode($payload));

## Accessing tasks endpoint
We need to supply this access token in the Authorization Headers like so:
GET http://localhost/web/api/tasks HTTP/1.1
Content-Type: application/json
Authorization: Bearer eyJpZCI6MiwibmFtZSI6Ik1hcnkifQ==

authAccessToken function decodes access token like so:
$plain_text = base64_decode($matches[1], true); and add populates user_id property on Auth class $this->user_id = $data["id"];

