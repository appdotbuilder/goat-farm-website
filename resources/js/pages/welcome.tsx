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

interface Testimonial {
    id: number;
    client_name: string;
    client_title: string | null;
    client_company: string | null;
    testimonial: string;
    client_photo: string | null;
    rating: number;
}



interface BlogPost {
    id: number;
    title: string;
    slug: string;
    excerpt: string | null;
    featured_image: string | null;
    published_at: string;
}

interface Props {
    featuredProducts: Product[];
    featuredTestimonials: Testimonial[];
    recentBlogPosts: BlogPost[];
    [key: string]: unknown;
}

export default function Welcome({ 
    featuredProducts, 
    featuredTestimonials, 
    recentBlogPosts 
}: Props) {
    return (
        <>
            <Head title="Green Valley Goat Farm - Premium Goats, Milk & Training Services" />
            
            <div className="min-h-screen bg-gradient-to-b from-green-50 to-white">
                {/* Header */}
                <header className="bg-white shadow-sm border-b border-green-100">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div className="flex justify-between items-center py-6">
                            <div className="flex items-center">
                                <div className="text-3xl mr-3">🐐</div>
                                <div>
                                    <h1 className="text-2xl font-bold text-green-800">Green Valley Goat Farm</h1>
                                    <p className="text-green-600 text-sm">Premium Quality Since 1995</p>
                                </div>
                            </div>
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

                {/* Hero Section */}
                <section className="relative py-20 px-4 sm:px-6 lg:px-8">
                    <div className="max-w-7xl mx-auto text-center">
                        <div className="mb-8">
                            <h2 className="text-5xl font-bold text-green-800 mb-4">
                                🐐 Welcome to Green Valley Goat Farm
                            </h2>
                            <p className="text-xl text-green-600 mb-8 max-w-3xl mx-auto">
                                Experience the finest in sustainable goat farming with our premium goats, 
                                fresh milk products, and expert training services. Family-owned and operated 
                                for over 25 years in the heart of the countryside.
                            </p>
                        </div>
                        
                        <div className="grid md:grid-cols-4 gap-6 mb-12">
                            <div className="bg-white p-6 rounded-lg shadow-md border border-green-100">
                                <div className="text-3xl mb-3">🐐</div>
                                <h3 className="font-semibold text-green-800 mb-2">Premium Goats</h3>
                                <p className="text-green-600 text-sm">Healthy, well-bred goats for farming and companionship</p>
                            </div>
                            <div className="bg-white p-6 rounded-lg shadow-md border border-green-100">
                                <div className="text-3xl mb-3">🥛</div>
                                <h3 className="font-semibold text-green-800 mb-2">Fresh Milk Products</h3>
                                <p className="text-green-600 text-sm">Organic goat milk, cheese, and dairy products</p>
                            </div>
                            <div className="bg-white p-6 rounded-lg shadow-md border border-green-100">
                                <div className="text-3xl mb-3">🎓</div>
                                <h3 className="font-semibold text-green-800 mb-2">Training Services</h3>
                                <p className="text-green-600 text-sm">Learn goat farming from experienced professionals</p>
                            </div>
                            <div className="bg-white p-6 rounded-lg shadow-md border border-green-100">
                                <div className="text-3xl mb-3">🌱</div>
                                <h3 className="font-semibold text-green-800 mb-2">Sustainable Practices</h3>
                                <p className="text-green-600 text-sm">Eco-friendly farming with natural methods</p>
                            </div>
                        </div>

                        <div className="flex flex-col sm:flex-row gap-4 justify-center">
                            <Link href="/products">
                                <Button size="lg" className="bg-green-600 hover:bg-green-700 text-white px-8">
                                    🛒 Shop Our Products
                                </Button>
                            </Link>
                            <Link href="/contact">
                                <Button size="lg" variant="outline" className="border-green-600 text-green-600 hover:bg-green-50 px-8">
                                    📞 Contact Us Today
                                </Button>
                            </Link>
                        </div>
                    </div>
                </section>

                {/* Featured Products Section */}
                {featuredProducts && featuredProducts.length > 0 && (
                    <section className="py-16 bg-white">
                        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div className="text-center mb-12">
                                <h3 className="text-3xl font-bold text-green-800 mb-4">🌟 Featured Products</h3>
                                <p className="text-green-600 max-w-2xl mx-auto">
                                    Discover our most popular products, carefully selected for quality and value
                                </p>
                            </div>
                            <div className="grid md:grid-cols-3 gap-8">
                                {featuredProducts.slice(0, 6).map((product) => (
                                    <div key={product.id} className="bg-green-50 rounded-lg p-6 border border-green-100">
                                        <div className="text-4xl mb-4">
                                            {product.category === 'goats' && '🐐'}
                                            {product.category === 'milk' && '🥛'}
                                            {product.category === 'processed_products' && '🧀'}
                                            {product.category === 'training_services' && '🎓'}
                                        </div>
                                        <h4 className="font-semibold text-green-800 mb-2">{product.name}</h4>
                                        <p className="text-green-600 text-sm mb-4">{product.description}</p>
                                        {product.price && (
                                            <p className="font-bold text-green-700">${product.price}</p>
                                        )}
                                    </div>
                                ))}
                            </div>
                            <div className="text-center mt-8">
                                <Link href="/products">
                                    <Button className="bg-green-600 hover:bg-green-700 text-white">
                                        View All Products →
                                    </Button>
                                </Link>
                            </div>
                        </div>
                    </section>
                )}

                {/* Testimonials Section */}
                {featuredTestimonials && featuredTestimonials.length > 0 && (
                    <section className="py-16 bg-green-50">
                        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div className="text-center mb-12">
                                <h3 className="text-3xl font-bold text-green-800 mb-4">💬 What Our Customers Say</h3>
                                <p className="text-green-600 max-w-2xl mx-auto">
                                    Don't just take our word for it - hear from our satisfied customers
                                </p>
                            </div>
                            <div className="grid md:grid-cols-3 gap-8">
                                {featuredTestimonials.map((testimonial) => (
                                    <div key={testimonial.id} className="bg-white rounded-lg p-6 shadow-md border border-green-100">
                                        <div className="flex mb-4">
                                            {[...Array(testimonial.rating)].map((_, i) => (
                                                <span key={i} className="text-yellow-400">⭐</span>
                                            ))}
                                        </div>
                                        <p className="text-green-700 mb-4 italic">"{testimonial.testimonial}"</p>
                                        <div className="flex items-center">
                                            <div className="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                                <span className="text-green-600 font-semibold">
                                                    {testimonial.client_name.charAt(0)}
                                                </span>
                                            </div>
                                            <div>
                                                <div className="font-semibold text-green-800">{testimonial.client_name}</div>
                                                {testimonial.client_title && (
                                                    <div className="text-green-600 text-sm">{testimonial.client_title}</div>
                                                )}
                                            </div>
                                        </div>
                                    </div>
                                ))}
                            </div>
                        </div>
                    </section>
                )}

                {/* Recent Blog Posts */}
                {recentBlogPosts && recentBlogPosts.length > 0 && (
                    <section className="py-16 bg-white">
                        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div className="text-center mb-12">
                                <h3 className="text-3xl font-bold text-green-800 mb-4">📰 Latest from Our Blog</h3>
                                <p className="text-green-600 max-w-2xl mx-auto">
                                    Stay updated with the latest tips, news, and insights from our farm
                                </p>
                            </div>
                            <div className="grid md:grid-cols-3 gap-8">
                                {recentBlogPosts.map((post) => (
                                    <div key={post.id} className="bg-green-50 rounded-lg overflow-hidden border border-green-100">
                                        <div className="p-6">
                                            <h4 className="font-semibold text-green-800 mb-2">{post.title}</h4>
                                            {post.excerpt && (
                                                <p className="text-green-600 text-sm mb-4">{post.excerpt}</p>
                                            )}
                                            <div className="text-green-500 text-xs">
                                                {new Date(post.published_at).toLocaleDateString()}
                                            </div>
                                        </div>
                                    </div>
                                ))}
                            </div>
                            <div className="text-center mt-8">
                                <Link href="/blog">
                                    <Button className="bg-green-600 hover:bg-green-700 text-white">
                                        Read More Articles →
                                    </Button>
                                </Link>
                            </div>
                        </div>
                    </section>
                )}

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