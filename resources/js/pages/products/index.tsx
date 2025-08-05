import React from 'react';
import { Head, Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';

interface Product {
    id: number;
    name: string;
    description: string;
    category: string;
    price: number | null;
    image_url: string | null;
}

interface Props {
    products: Record<string, Product[]>;
    selectedCategory?: string;
    [key: string]: unknown;
}

const categoryLabels = {
    goats: '🐐 Premium Goats',
    milk: '🥛 Fresh Milk Products',
    processed_products: '🧀 Processed Products',
    training_services: '🎓 Training Services'
};

const categoryDescriptions = {
    goats: 'Healthy, well-bred goats for farming and companionship',
    milk: 'Fresh, organic goat milk delivered daily',
    processed_products: 'Artisanal cheese, yogurt, and other dairy products',
    training_services: 'Professional goat farming education and consultation'
};

export default function ProductsIndex({ products, selectedCategory }: Props) {
    return (
        <>
            <Head title="Products & Services - Green Valley Goat Farm" />
            
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
                                <Link href="/products" className="text-green-800 font-bold">Products</Link>
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

                {/* Hero Section */}
                <section className="py-12 px-4 sm:px-6 lg:px-8">
                    <div className="max-w-7xl mx-auto text-center">
                        <h2 className="text-4xl font-bold text-green-800 mb-4">
                            🛒 Our Products & Services
                        </h2>
                        <p className="text-xl text-green-600 max-w-3xl mx-auto mb-8">
                            Discover our comprehensive range of premium goats, fresh dairy products, 
                            and professional training services designed to meet all your farming needs.
                        </p>
                    </div>
                </section>

                {/* Category Filter */}
                <section className="px-4 sm:px-6 lg:px-8 mb-8">
                    <div className="max-w-7xl mx-auto">
                        <div className="flex flex-wrap gap-4 justify-center">
                            <Link href="/products">
                                <Button 
                                    variant={!selectedCategory ? "default" : "outline"}
                                    className={!selectedCategory ? "bg-green-600 hover:bg-green-700" : "border-green-600 text-green-600 hover:bg-green-50"}
                                >
                                    All Categories
                                </Button>
                            </Link>
                            {Object.entries(categoryLabels).map(([category, label]) => (
                                <Link key={category} href={`/products?category=${category}`}>
                                    <Button 
                                        variant={selectedCategory === category ? "default" : "outline"}
                                        className={selectedCategory === category ? "bg-green-600 hover:bg-green-700" : "border-green-600 text-green-600 hover:bg-green-50"}
                                    >
                                        {label}
                                    </Button>
                                </Link>
                            ))}
                        </div>
                    </div>
                </section>

                {/* Products Grid */}
                <main className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
                    {Object.entries(products).map(([category, categoryProducts]) => (
                        <section key={category} className="mb-16">
                            <div className="text-center mb-8">
                                <h3 className="text-3xl font-bold text-green-800 mb-2">
                                    {categoryLabels[category as keyof typeof categoryLabels]}
                                </h3>
                                <p className="text-green-600 max-w-2xl mx-auto">
                                    {categoryDescriptions[category as keyof typeof categoryDescriptions]}
                                </p>
                            </div>
                            
                            <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                                {categoryProducts.map((product) => (
                                    <div key={product.id} className="bg-white rounded-lg shadow-md border border-green-100 overflow-hidden hover:shadow-lg transition-shadow">
                                        <div className="p-6">
                                            <div className="text-4xl mb-4 text-center">
                                                {category === 'goats' && '🐐'}
                                                {category === 'milk' && '🥛'}
                                                {category === 'processed_products' && '🧀'}
                                                {category === 'training_services' && '🎓'}
                                            </div>
                                            <h4 className="text-xl font-semibold text-green-800 mb-3">{product.name}</h4>
                                            <p className="text-green-600 mb-4">{product.description}</p>
                                            
                                            <div className="flex justify-between items-center">
                                                {product.price ? (
                                                    <div className="text-2xl font-bold text-green-700">
                                                        ${product.price}
                                                    </div>
                                                ) : (
                                                    <div className="text-green-600 font-medium">
                                                        Contact for pricing
                                                    </div>
                                                )}
                                                <Link href={`/products/${product.id}`}>
                                                    <Button size="sm" className="bg-green-600 hover:bg-green-700 text-white">
                                                        Learn More
                                                    </Button>
                                                </Link>
                                            </div>
                                        </div>
                                    </div>
                                ))}
                            </div>
                        </section>
                    ))}
                    
                    {Object.keys(products).length === 0 && (
                        <div className="text-center py-16">
                            <div className="text-6xl mb-4">🐐</div>
                            <h3 className="text-2xl font-bold text-green-800 mb-2">No Products Available</h3>
                            <p className="text-green-600">Check back soon for our latest offerings!</p>
                        </div>
                    )}
                </main>

                {/* Contact CTA */}
                <section className="bg-green-600 py-16">
                    <div className="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
                        <h3 className="text-3xl font-bold text-white mb-4">
                            📞 Ready to Get Started?
                        </h3>
                        <p className="text-green-100 text-lg mb-8">
                            Contact us today to discuss your needs and get personalized recommendations 
                            for our products and services.
                        </p>
                        <div className="flex flex-col sm:flex-row gap-4 justify-center">
                            <Link href="/contact">
                                <Button size="lg" variant="outline" className="border-white text-white hover:bg-white hover:text-green-600 px-8">
                                    Contact Us
                                </Button>
                            </Link>
                            <a href="tel:+15551234567">
                                <Button size="lg" className="bg-white text-green-600 hover:bg-green-50 px-8">
                                    📞 (555) 123-4567
                                </Button>
                            </a>
                        </div>
                    </div>
                </section>

                {/* Footer */}
                <footer className="bg-green-800 text-white py-12">
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