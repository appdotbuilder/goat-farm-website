import React from 'react';
import { Head, Link } from '@inertiajs/react';
import { AppShell } from '@/components/app-shell';
import { Button } from '@/components/ui/button';

interface Page {
    id: number;
    slug: string;
    title: string;
    is_active: boolean;
    created_at: string;
    updated_at: string;
}

interface Props {
    pages: {
        data: Page[];
        links: Array<{
            url: string | null;
            label: string;
            active: boolean;
        }>;
        meta: {
            current_page: number;
            last_page: number;
            per_page: number;
            total: number;
        };
    };
    [key: string]: unknown;
}

export default function AdminPagesIndex({ pages }: Props) {
    return (
        <AppShell>
            <Head title="Manage Pages - Admin Dashboard" />
            
            <div className="space-y-6">
                <div className="flex justify-between items-center">
                    <div>
                        <h1 className="text-2xl font-bold text-green-800">📄 Manage Pages</h1>
                        <p className="text-green-600">Create and edit website pages</p>
                    </div>
                    <Link href="/admin/pages/create">
                        <Button className="bg-green-600 hover:bg-green-700 text-white">
                            ➕ Create New Page
                        </Button>
                    </Link>
                </div>

                <div className="bg-white rounded-lg shadow-sm border border-green-100">
                    <div className="p-6">
                        {pages.data.length > 0 ? (
                            <div className="overflow-x-auto">
                                <table className="w-full">
                                    <thead>
                                        <tr className="border-b border-green-100">
                                            <th className="text-left py-3 px-4 font-semibold text-green-800">Title</th>
                                            <th className="text-left py-3 px-4 font-semibold text-green-800">Slug</th>
                                            <th className="text-left py-3 px-4 font-semibold text-green-800">Status</th>
                                            <th className="text-left py-3 px-4 font-semibold text-green-800">Updated</th>
                                            <th className="text-right py-3 px-4 font-semibold text-green-800">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {pages.data.map((page) => (
                                            <tr key={page.id} className="border-b border-green-50 hover:bg-green-50">
                                                <td className="py-4 px-4">
                                                    <div className="font-medium text-green-800">{page.title}</div>
                                                </td>
                                                <td className="py-4 px-4">
                                                    <code className="text-sm bg-green-100 text-green-700 px-2 py-1 rounded">
                                                        /{page.slug}
                                                    </code>
                                                </td>
                                                <td className="py-4 px-4">
                                                    <span className={`inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${
                                                        page.is_active 
                                                            ? 'bg-green-100 text-green-800' 
                                                            : 'bg-gray-100 text-gray-800'
                                                    }`}>
                                                        {page.is_active ? '✅ Published' : '❌ Draft'}
                                                    </span>
                                                </td>
                                                <td className="py-4 px-4 text-green-600 text-sm">
                                                    {new Date(page.updated_at).toLocaleDateString()}
                                                </td>
                                                <td className="py-4 px-4 text-right">
                                                    <div className="flex justify-end space-x-2">
                                                        <Link href={`/${page.slug}`} target="_blank">
                                                            <Button variant="outline" size="sm" className="border-green-600 text-green-600 hover:bg-green-50">
                                                                👁️ View
                                                            </Button>
                                                        </Link>
                                                        <Link href={`/admin/pages/${page.id}/edit`}>
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
                                <div className="text-6xl mb-4">📄</div>
                                <h3 className="text-xl font-bold text-green-800 mb-2">No Pages Yet</h3>
                                <p className="text-green-600 mb-6">Create your first page to get started.</p>
                                <Link href="/admin/pages/create">
                                    <Button className="bg-green-600 hover:bg-green-700 text-white">
                                        ➕ Create First Page
                                    </Button>
                                </Link>
                            </div>
                        )}
                    </div>
                </div>

                {/* Pagination would go here if needed */}
            </div>
        </AppShell>
    );
}