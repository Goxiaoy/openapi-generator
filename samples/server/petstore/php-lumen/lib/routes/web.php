<?php

/**
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

/**
 * OpenAPI Petstore
 * @version 1.0.0
 */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/**
 * patch call123TestSpecialTags
 * Summary: To test special tags
 * Notes: To test special tags and operation ID starting with number
 */
$router->patch('/v2/another-fake/dummy', 'AnotherFakeApi@call123TestSpecialTags');
/**
 * patch testClientModel
 * Summary: To test \&quot;client\&quot; model
 * Notes: To test \&quot;client\&quot; model
 */
$router->patch('/v2/fake', 'FakeApi@testClientModel');
/**
 * post testEndpointParameters
 * Summary: Fake endpoint for testing various parameters  假端點  偽のエンドポイント  가짜 엔드 포인트
 * Notes: Fake endpoint for testing various parameters  假端點  偽のエンドポイント  가짜 엔드 포인트
 */
$router->post('/v2/fake', 'FakeApi@testEndpointParameters');
/**
 * get testEnumParameters
 * Summary: To test enum parameters
 * Notes: To test enum parameters
 */
$router->get('/v2/fake', 'FakeApi@testEnumParameters');
/**
 * delete testGroupParameters
 * Summary: Fake endpoint to test group parameters (optional)
 * Notes: Fake endpoint to test group parameters (optional)
 */
$router->delete('/v2/fake', 'FakeApi@testGroupParameters');
/**
 * put testBodyWithFileSchema
 * Summary: 
 * Notes: For this test, the body for this request much reference a schema named &#x60;File&#x60;.
 */
$router->put('/v2/fake/body-with-file-schema', 'FakeApi@testBodyWithFileSchema');
/**
 * put testBodyWithQueryParams
 * Summary: 
 * Notes: 
 */
$router->put('/v2/fake/body-with-query-params', 'FakeApi@testBodyWithQueryParams');
/**
 * post createXmlItem
 * Summary: creates an XmlItem
 * Notes: this route creates an XmlItem
 */
$router->post('/v2/fake/create_xml_item', 'FakeApi@createXmlItem');
/**
 * post testInlineAdditionalProperties
 * Summary: test inline additionalProperties
 * Notes: 
 */
$router->post('/v2/fake/inline-additionalProperties', 'FakeApi@testInlineAdditionalProperties');
/**
 * get testJsonFormData
 * Summary: test json serialization of form data
 * Notes: 
 */
$router->get('/v2/fake/jsonFormData', 'FakeApi@testJsonFormData');
/**
 * post fakeOuterBooleanSerialize
 * Summary: 
 * Notes: Test serialization of outer boolean types
 */
$router->post('/v2/fake/outer/boolean', 'FakeApi@fakeOuterBooleanSerialize');
/**
 * post fakeOuterCompositeSerialize
 * Summary: 
 * Notes: Test serialization of object with outer number type
 */
$router->post('/v2/fake/outer/composite', 'FakeApi@fakeOuterCompositeSerialize');
/**
 * post fakeOuterNumberSerialize
 * Summary: 
 * Notes: Test serialization of outer number types
 */
$router->post('/v2/fake/outer/number', 'FakeApi@fakeOuterNumberSerialize');
/**
 * post fakeOuterStringSerialize
 * Summary: 
 * Notes: Test serialization of outer string types
 */
$router->post('/v2/fake/outer/string', 'FakeApi@fakeOuterStringSerialize');
/**
 * put testQueryParameterCollectionFormat
 * Summary: 
 * Notes: To test the collection format in query parameters
 */
$router->put('/v2/fake/test-query-paramters', 'FakeApi@testQueryParameterCollectionFormat');
/**
 * patch testClassname
 * Summary: To test class name in snake case
 * Notes: To test class name in snake case
 */
$router->patch('/v2/fake_classname_test', 'FakeClassnameTags123Api@testClassname');
/**
 * post uploadFileWithRequiredFile
 * Summary: uploads an image (required)
 * Notes: 
 */
$router->post('/v2/fake/{petId}/uploadImageWithRequiredFile', 'PetApi@uploadFileWithRequiredFile');
/**
 * post addPet
 * Summary: Add a new pet to the store
 * Notes: 
 */
$router->post('/v2/pet', 'PetApi@addPet');
/**
 * put updatePet
 * Summary: Update an existing pet
 * Notes: 
 */
$router->put('/v2/pet', 'PetApi@updatePet');
/**
 * get findPetsByStatus
 * Summary: Finds Pets by status
 * Notes: Multiple status values can be provided with comma separated strings
 */
$router->get('/v2/pet/findByStatus', 'PetApi@findPetsByStatus');
/**
 * get findPetsByTags
 * Summary: Finds Pets by tags
 * Notes: Multiple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.
 */
$router->get('/v2/pet/findByTags', 'PetApi@findPetsByTags');
/**
 * delete deletePet
 * Summary: Deletes a pet
 * Notes: 
 */
$router->delete('/v2/pet/{petId}', 'PetApi@deletePet');
/**
 * get getPetById
 * Summary: Find pet by ID
 * Notes: Returns a single pet
 */
$router->get('/v2/pet/{petId}', 'PetApi@getPetById');
/**
 * post updatePetWithForm
 * Summary: Updates a pet in the store with form data
 * Notes: 
 */
$router->post('/v2/pet/{petId}', 'PetApi@updatePetWithForm');
/**
 * post uploadFile
 * Summary: uploads an image
 * Notes: 
 */
$router->post('/v2/pet/{petId}/uploadImage', 'PetApi@uploadFile');
/**
 * get getInventory
 * Summary: Returns pet inventories by status
 * Notes: Returns a map of status codes to quantities
 */
$router->get('/v2/store/inventory', 'StoreApi@getInventory');
/**
 * post placeOrder
 * Summary: Place an order for a pet
 * Notes: 
 */
$router->post('/v2/store/order', 'StoreApi@placeOrder');
/**
 * delete deleteOrder
 * Summary: Delete purchase order by ID
 * Notes: For valid response try integer IDs with value &lt; 1000. Anything above 1000 or nonintegers will generate API errors
 */
$router->delete('/v2/store/order/{order_id}', 'StoreApi@deleteOrder');
/**
 * get getOrderById
 * Summary: Find purchase order by ID
 * Notes: For valid response try integer IDs with value &lt;&#x3D; 5 or &gt; 10. Other values will generated exceptions
 */
$router->get('/v2/store/order/{order_id}', 'StoreApi@getOrderById');
/**
 * post createUser
 * Summary: Create user
 * Notes: This can only be done by the logged in user.
 */
$router->post('/v2/user', 'UserApi@createUser');
/**
 * post createUsersWithArrayInput
 * Summary: Creates list of users with given input array
 * Notes: 
 */
$router->post('/v2/user/createWithArray', 'UserApi@createUsersWithArrayInput');
/**
 * post createUsersWithListInput
 * Summary: Creates list of users with given input array
 * Notes: 
 */
$router->post('/v2/user/createWithList', 'UserApi@createUsersWithListInput');
/**
 * get loginUser
 * Summary: Logs user into the system
 * Notes: 
 */
$router->get('/v2/user/login', 'UserApi@loginUser');
/**
 * get logoutUser
 * Summary: Logs out current logged in user session
 * Notes: 
 */
$router->get('/v2/user/logout', 'UserApi@logoutUser');
/**
 * delete deleteUser
 * Summary: Delete user
 * Notes: This can only be done by the logged in user.
 */
$router->delete('/v2/user/{username}', 'UserApi@deleteUser');
/**
 * get getUserByName
 * Summary: Get user by user name
 * Notes: 
 */
$router->get('/v2/user/{username}', 'UserApi@getUserByName');
/**
 * put updateUser
 * Summary: Updated user
 * Notes: This can only be done by the logged in user.
 */
$router->put('/v2/user/{username}', 'UserApi@updateUser');

