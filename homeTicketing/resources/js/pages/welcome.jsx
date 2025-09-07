import { Component } from 'react';
    
const WelcomePage = () => {
return (
        <div>
            <h1>welcome to our page</h1>
            <a href="/accountCreation"><button>Create Account</button></a>
            <a href="/loginPage"><button>Login</button></a>
        </div>
    );
}

export default WelcomePage