import React from 'react';
import { Head, Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';

interface Page {
    id: number;
    slug: string;
    title: string;
    content: string;
    meta_data: Record<string, unknown> | null;
}

interface Props {
    page: Page;
    [key: string]: unknown;
}

export default function PageView({ page }: Props) {
    return (
        <>
            <Head title={page.title} />
            
            <div className="min-h-screen bg-gradient-to-b from-green-50 to-white">
                {/* Header */}
                <header className="bg-white shadow-sm border-b border-green-100">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div className="flex justify-between items-center py-6">
                            <Link href="/" className="flex items-center">
                                <div className="text-3xl mr-3">🐐</div>
                                <div>
                                    <h1 className="text-2xl font-bold text-green-800">Green Valley Goat Farm</h1>
                                    <p className="text-green-600 text-sm">Premium Quality Since 1995</p>
                                </div>
                            </Link>
                            <nav className="hidden md:flex space-x-8">
                                <Link href="/" className="text-green-700 hover:text-green-800 font-medium">Home</Link>
                                <Link href="/about" className="text-green-700 hover:text-green-800 font-medium">About Us</Link>
                                <Link href="/products" className="text-green-700 hover:text-green-800 font-medium">Products</Link>
                                <Link href="/gallery" className="text-green-700 hover:text-green-800 font-medium">Gallery</Link>
                                <Link href="/testimonials" className="text-green-700 hover:text-green-800 font-medium">Testimonials</Link>
                                <Link href="/blog" className="text-green-700 hover:text-green-800 font-medium">Blog</Link>
                                <Link href="/contact" className="text-green-700 hover:text-green-800 font-medium">Contact</Link>
                            </nav>
                            <div className="flex space-x-3">
                                <Link href="/login">
                                    <Button variant="outline" className="border-green-600 text-green-600 hover:bg-green-50">
                                        Login
                                    </Button>
                                </Link>
                                <Link href="/register">
                                    <Button className="bg-green-600 hover:bg-green-700 text-white">
                                        Register
                                    </Button>
                                </Link>
                            </div>
                        </div>
                    </div>
                </header>

                {/* Page Content */}
                <main className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div className="bg-white rounded-lg shadow-sm border border-green-100 p-8">
                        <h1 className="text-3xl font-bold text-green-800 mb-6">{page.title}</h1>
                        <div 
                            className="prose prose-green max-w-none text-green-700"
                            dangerouslySetInnerHTML={{ __html: page.content }}
                        />
                    </div>
                </main>

                {/* Footer */}
                <footer className="bg-green-800 text-white py-12 mt-16">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div className="grid md:grid-cols-4 gap-8">
                            <div>
                                <div className="flex items-center mb-4">
                                    <div className="text-2xl mr-2">🐐</div>
                                    <h4 className="font-bold">Green Valley Goat Farm</h4>
                                </div>
                                <p className="text-green-100 text-sm">
                                    Your trusted partner in sustainable goat farming since 1995.
                                </p>
                            </div>
                            <div>
                                <h5 className="font-semibold mb-4">Quick Links</h5>
                                <ul className="space-y-2 text-green-100 text-sm">
                                    <li><Link href="/about" className="hover:text-white">About Us</Link></li>
                                    <li><Link href="/products" className="hover:text-white">Products</Link></li>
                                    <li><Link href="/gallery" className="hover:text-white">Gallery</Link></li>
                                    <li><Link href="/contact" className="hover:text-white">Contact</Link></li>
                                </ul>
                            </div>
                            <div>
                                <h5 className="font-semibold mb-4">Products</h5>
                                <ul className="space-y-2 text-green-100 text-sm">
                                    <li>Premium Goats</li>
                                    <li>Fresh Milk</li>
                                    <li>Cheese & Dairy</li>
                                    <li>Training Services</li>
                                </ul>
                            </div>
                            <div>
                                <h5 className="font-semibold mb-4">Contact Info</h5>
                                <div className="space-y-2 text-green-100 text-sm">
                                    <p>📍 123 Farm Road, Green Valley</p>
                                    <p>📞 (555) 123-4567</p>
                                    <p>✉️ info@greenvalleygoats.com</p>
                                </div>
                            </div>
                        </div>
                        <div className="border-t border-green-700 mt-8 pt-8 text-center text-green-100 text-sm">
                            <p>&copy; 2024 Green Valley Goat Farm. All rights reserved.</p>
                        </div>
                    </div>
                </footer>
            </div>
        </>
    );
}