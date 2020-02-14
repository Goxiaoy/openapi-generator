/**
 * OpenAPI Petstore
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI-Generator unset.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

/*
 * User.h
 *
 * A User who is purchasing from the pet store
 */

#ifndef User_H_
#define User_H_



#include <string>
#include <memory>
#include <boost/property_tree/ptree.hpp>

namespace org {
namespace openapitools {
namespace server {
namespace model {

/// <summary>
/// A User who is purchasing from the pet store
/// </summary>
class  User 
{
public:
    User();
    virtual ~User();
    
    std::string toJsonString(bool prettyJson = false);
    void fromJsonString(std::string const& jsonString);
    boost::property_tree::ptree toPropertyTree();
    void fromPropertyTree(boost::property_tree::ptree const& pt);

    /////////////////////////////////////////////
    /// User members

    /// <summary>
    /// 
    /// </summary>
    int64_t getId() const;
    void setId(int64_t value);

    /// <summary>
    /// 
    /// </summary>
    std::string getUsername() const;
    void setUsername(std::string value);

    /// <summary>
    /// 
    /// </summary>
    std::string getFirstName() const;
    void setFirstName(std::string value);

    /// <summary>
    /// 
    /// </summary>
    std::string getLastName() const;
    void setLastName(std::string value);

    /// <summary>
    /// 
    /// </summary>
    std::string getEmail() const;
    void setEmail(std::string value);

    /// <summary>
    /// 
    /// </summary>
    std::string getPassword() const;
    void setPassword(std::string value);

    /// <summary>
    /// 
    /// </summary>
    std::string getPhone() const;
    void setPhone(std::string value);

    /// <summary>
    /// User Status
    /// </summary>
    int32_t getUserStatus() const;
    void setUserStatus(int32_t value);
protected:
    int64_t m_Id;
    std::string m_Username;
    std::string m_FirstName;
    std::string m_LastName;
    std::string m_Email;
    std::string m_Password;
    std::string m_Phone;
    int32_t m_UserStatus;
};

}
}
}
}

#endif /* User_H_ */
