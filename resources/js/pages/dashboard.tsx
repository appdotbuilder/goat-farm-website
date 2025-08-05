import React from 'react';
import { Head, Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

export default function Dashboard() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Farm Admin Dashboard" />
            
            <div className="space-y-8 p-6">
                <div>
                    <h1 className="text-3xl font-bold text-green-800">🐐 Farm Admin Dashboard</h1>
                    <p className="text-green-600 mt-2">Manage your Green Valley Goat Farm website content</p>
                </div>

                <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {/* Pages Management */}
                    <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
                        <div className="text-4xl mb-4">📄</div>
                        <h3 className="text-xl font-semibold text-green-800 mb-2">Manage Pages</h3>
                        <p className="text-green-600 mb-4 text-sm">
                            Edit website pages like About Us, Contact, and more
                        </p>
                        <Link href="/admin/pages">
                            <Button className="w-full bg-green-600 hover:bg-green-700 text-white">
                                Edit Pages
                            </Button>
                        </Link>
                    </div>

                    {/* Products Management */}
                    <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
                        <div className="text-4xl mb-4">🛒</div>
                        <h3 className="text-xl font-semibold text-green-800 mb-2">Manage Products</h3>
                        <p className="text-green-600 mb-4 text-sm">
                            Add and edit goats, milk products, and services
                        </p>
                        <Link href="/admin/products">
                            <Button className="w-full bg-green-600 hover:bg-green-700 text-white">
                                Manage Products
                            </Button>
                        </Link>
                    </div>

                    {/* Gallery Management */}
                    <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
                        <div className="text-4xl mb-4">📸</div>
                        <h3 className="text-xl font-semibold text-green-800 mb-2">Gallery</h3>
                        <p className="text-green-600 mb-4 text-sm">
                            Upload and manage farm photos and videos
                        </p>
                        <Button className="w-full bg-gray-400 text-white cursor-not-allowed" disabled>
                            Coming Soon
                        </Button>
                    </div>

                    {/* Testimonials Management */}
                    <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
                        <div className="text-4xl mb-4">💬</div>
                        <h3 className="text-xl font-semibold text-green-800 mb-2">Testimonials</h3>
                        <p className="text-green-600 mb-4 text-sm">
                            Manage customer testimonials and reviews
                        </p>
                        <Button className="w-full bg-gray-400 text-white cursor-not-allowed" disabled>
                            Coming Soon
                        </Button>
                    </div>

                    {/* Blog Management */}
                    <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
                        <div className="text-4xl mb-4">📰</div>
                        <h3 className="text-xl font-semibent text-green-800 mb-2">Blog Posts</h3>
                        <p className="text-green-600 mb-4 text-sm">
                            Write and publish farm news and articles
                        </p>
                        <Button className="w-full bg-gray-400 text-white cursor-not-allowed" disabled>
                            Coming Soon
                        </Button>
                    </div>

                    {/* Site Settings */}
                    <div className="bg-white p-6 rounded-lg shadow-sm border border-green-100">
                        <div className="text-4xl mb-4">⚙️</div>
                        <h3 className="text-xl font-semibold text-green-800 mb-2">Site Settings</h3>
                        <p className="text-green-600 mb-4 text-sm">
                            Update contact info, farm details, and more
                        </p>
                        <Button className="w-full bg-gray-400 text-white cursor-not-allowed" disabled>
                            Coming Soon
                        </Button>
                    </div>
                </div>

                {/* Quick Stats */}
                <div className="bg-green-50 p-6 rounded-lg border border-green-100">
                    <h3 className="text-xl font-semibold text-green-800 mb-4">📊 Quick Overview</h3>
                    <div className="grid md:grid-cols-4 gap-4">
                        <div className="text-center">
                            <div className="text-2xl font-bold text-green-700">5</div>
                            <div className="text-sm text-green-600">Active Pages</div>
                        </div>
                        <div className="text-center">
                            <div className="text-2xl font-bold text-green-700">11</div>
                            <div className="text-sm text-green-600">Products & Services</div>
                        </div>
                        <div className="text-center">
                            <div className="text-2xl font-bold text-green-700">5</div>
                            <div className="text-sm text-green-600">Customer Reviews</div>
                        </div>
                        <div className="text-center">
                            <div className="text-2xl font-bold text-green-700">0</div>
                            <div className="text-sm text-green-600">Blog Posts</div>
                        </div>
                    </div>
                </div>

                {/* Quick Actions */}
                <div className="flex flex-wrap gap-4">
                    <Link href="/" target="_blank">
                        <Button variant="outline" className="border-green-600 text-green-600 hover:bg-green-50">
                            👁️ View Website
                        </Button>
                    </Link>
                    <Link href="/admin/products/create">
                        <Button variant="outline" className="border-green-600 text-green-600 hover:bg-green-50">
                            ➕ Add Product
                        </Button>
                    </Link>
                    <Link href="/admin/pages/create">
                        <Button variant="outline" className="border-green-600 text-green-600 hover:bg-green-50">
                            📝 Create Page
                        </Button>
                    </Link>
                </div>
            </div>
        </AppLayout>
    );
}