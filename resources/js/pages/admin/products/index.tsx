import React from 'react';
import { Head, Link } from '@inertiajs/react';
import { AppShell } from '@/components/app-shell';
import { Button } from '@/components/ui/button';

interface Product {
    id: number;
    name: string;
    category: string;
    price: number | null;
    is_available: boolean;
    sort_order: number;
    created_at: string;
    updated_at: string;
}

interface Props {
    products: Product[];
    [key: string]: unknown;
}

const categoryLabels = {
    goats: '🐐 Goats',
    milk: '🥛 Milk',
    processed_products: '🧀 Processed',
    training_services: '🎓 Training'
};

export default function AdminProductsIndex({ products }: Props) {
    return (
        <AppShell>
            <Head title="Manage Products - Admin Dashboard" />
            
            <div className="space-y-6">
                <div className="flex justify-between items-center">
                    <div>
                        <h1 className="text-2xl font-bold text-green-800">🛒 Manage Products</h1>
                        <p className="text-green-600">Add and manage your farm products and services</p>
                    </div>
                    <Link href="/admin/products/create">
                        <Button className="bg-green-600 hover:bg-green-700 text-white">
                            ➕ Add New Product
                        </Button>
                    </Link>
                </div>

                <div className="bg-white rounded-lg shadow-sm border border-green-100">
                    <div className="p-6">
                        {products.length > 0 ? (
                            <div className="overflow-x-auto">
                                <table className="w-full">
                                    <thead>
                                        <tr className="border-b border-green-100">
                                            <th className="text-left py-3 px-4 font-semibold text-green-800">Product</th>
                                            <th className="text-left py-3 px-4 font-semibold text-green-800">Category</th>
                                            <th className="text-left py-3 px-4 font-semibold text-green-800">Price</th>
                                            <th className="text-left py-3 px-4 font-semibold text-green-800">Status</th>
                                            <th className="text-left py-3 px-4 font-semibold text-green-800">Order</th>
                                            <th className="text-right py-3 px-4 font-semibold text-green-800">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {products.map((product) => (
                                            <tr key={product.id} className="border-b border-green-50 hover:bg-green-50">
                                                <td className="py-4 px-4">
                                                    <div className="font-medium text-green-800">{product.name}</div>
                                                </td>
                                                <td className="py-4 px-4">
                                                    <span className="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                        {categoryLabels[product.category as keyof typeof categoryLabels]}
                                                    </span>
                                                </td>
                                                <td className="py-4 px-4">
                                                    {product.price ? (
                                                        <span className="font-semibold text-green-700">${product.price}</span>
                                                    ) : (
                                                        <span className="text-green-500 text-sm">Contact for pricing</span>
                                                    )}
                                                </td>
                                                <td className="py-4 px-4">
                                                    <span className={`inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${
                                                        product.is_available 
                                                            ? 'bg-green-100 text-green-800' 
                                                            : 'bg-red-100 text-red-800'
                                                    }`}>
                                                        {product.is_available ? '✅ Available' : '❌ Unavailable'}
                                                    </span>
                                                </td>
                                                <td className="py-4 px-4 text-green-600">
                                                    #{product.sort_order}
                                                </td>
                                                <td className="py-4 px-4 text-right">
                                                    <div className="flex justify-end space-x-2">
                                                        <Link href={`/products/${product.id}`} target="_blank">
                                                            <Button variant="outline" size="sm" className="border-green-600 text-green-600 hover:bg-green-50">
                                                                👁️ View
                                                            </Button>
                                                        </Link>
                                                        <Link href={`/admin/products/${product.id}/edit`}>
                                                            <Button variant="outline" size="sm" className="border-green-600 text-green-600 hover:bg-green-50">
                                                                ✏️ Edit
                                                            </Button>
                                                        </Link>
                                                    </div>
                                                </td>
                                            </tr>
                                        ))}
                                    </tbody>
                                </table>
                            </div>
                        ) : (
                            <div className="text-center py-12">
                                <div className="text-6xl mb-4">🛒</div>
                                <h3 className="text-xl font-bold text-green-800 mb-2">No Products Yet</h3>
                                <p className="text-green-600 mb-6">Add your first product to get started.</p>
                                <Link href="/admin/products/create">
                                    <Button className="bg-green-600 hover:bg-green-700 text-white">
                                        ➕ Add First Product
                                    </Button>
                                </Link>
                            </div>
                        )}
                    </div>
                </div>
            </div>
        </AppShell>
    );
}