import { Link } from 'react-router-dom';

const Navbar = () => {
    return (
        <div className='w-screen h-[100px] bg-gray-800 text-white flex items-center justify-between px-4'>
            <div className='text-xl font-bold'>MyApp</div>
            <nav>
                <ul className='flex space-x-4'>
                    <li>
                        <Link to="/" className='hover:underline'>Home</Link>
                    </li>
                    <li>
                        <Link to="/about" className='hover:underline'>About</Link>
                    </li>
                    <li>
                        <Link to="/contact" className='hover:underline'>Contact</Link>
                    </li>
                </ul>
            </nav>
        </div>
    );
}

export default Navbar;
