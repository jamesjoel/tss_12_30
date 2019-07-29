using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Practice
{
    #region Pr
    public class Pr
    {
        #region Member Variables
        protected int _id;
        protected string _full_name;
        protected string _username;
        protected string _password;
        protected string _gender;
        protected string _contact;
        protected string _city;
        protected string _address;
        #endregion
        #region Constructors
        public Pr() { }
        public Pr(string full_name, string username, string password, string gender, string contact, string city, string address)
        {
            this._full_name=full_name;
            this._username=username;
            this._password=password;
            this._gender=gender;
            this._contact=contact;
            this._city=city;
            this._address=address;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Full_name
        {
            get {return _full_name;}
            set {_full_name=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Gender
        {
            get {return _gender;}
            set {_gender=value;}
        }
        public virtual string Contact
        {
            get {return _contact;}
            set {_contact=value;}
        }
        public virtual string City
        {
            get {return _city;}
            set {_city=value;}
        }
        public virtual string Address
        {
            get {return _address;}
            set {_address=value;}
        }
        #endregion
    }
    #endregion
}