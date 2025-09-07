import { Form } from '@inertiajs/react';
import { Link } from '@inertiajs/react';
import { useState } from 'react';
import { createRoot } from 'react-dom/client';

export default function Register() {

    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");

    function handleNameChange(e) {
        setName(e.target.value);
    }
    function handleEmailChange(e) {
        setEmail(e.target.value);
    }
    function handlePasswordChange(e) {
        setPassword(e.target.value);
    }


    return (
        <form>
            <label>Username:
                <input
                    type="text"
                    value={name}
                    onChange={handleNameChange}
                />
            </label>
            <label>Email
                <input
                    type="text"
                    value={email}
                    onChange={handleEmailChange}
                />
            </label>
            <label>Password
                <input
                    type="text"
                    value={password}
                    onChange={handlePasswordChange}
                />
            </label>
            <Link href="/home">
                <button type="submit">Create Account</button>
            </Link>
            <p></p>
        </form >
    )
}