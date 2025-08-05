<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'slug' => 'about',
                'title' => 'About Green Valley Goat Farm',
                'content' => '<div class="space-y-6">
                    <div class="text-center mb-8">
                        <div class="text-6xl mb-4">🐐</div>
                        <h2 class="text-3xl font-bold text-green-800 mb-4">Our Story</h2>
                    </div>
                    
                    <p class="text-lg text-green-700 leading-relaxed">
                        Welcome to Green Valley Goat Farm, where passion for sustainable agriculture meets excellence in goat farming. 
                        Since 1995, our family-owned farm has been dedicated to raising healthy, happy goats and producing the finest 
                        dairy products in the region.
                    </p>
                    
                    <p class="text-green-700 leading-relaxed">
                        Located in the heart of Green Valley, our 200-acre farm provides the perfect environment for our herd of 
                        over 150 goats. We specialize in premium breeds including Nubian, Alpine, and Saanen goats, each carefully 
                        selected for their milk production, temperament, and overall health.
                    </p>
                    
                    <div class="bg-green-50 p-6 rounded-lg border border-green-100">
                        <h3 class="text-xl font-bold text-green-800 mb-4">🌱 Our Philosophy</h3>
                        <ul class="space-y-2 text-green-700">
                            <li>• <strong>Sustainable Farming:</strong> We use eco-friendly practices that respect the land and environment</li>
                            <li>• <strong>Animal Welfare:</strong> Our goats are treated with love and care, ensuring their health and happiness</li>
                            <li>• <strong>Quality Products:</strong> From farm to table, we maintain the highest standards in all our products</li>
                            <li>• <strong>Community Focus:</strong> We believe in supporting our local community and sharing our knowledge</li>
                        </ul>
                    </div>
                </div>',
                'is_active' => true,
            ],
            [
                'slug' => 'contact',
                'title' => 'Contact Green Valley Goat Farm',
                'content' => '<div class="space-y-8">
                    <div class="text-center mb-8">
                        <div class="text-6xl mb-4">📞</div>
                        <h2 class="text-3xl font-bold text-green-800 mb-4">Get In Touch</h2>
                        <p class="text-green-600 max-w-2xl mx-auto">
                            We\'d love to hear from you! Whether you have questions about our products, 
                            want to schedule a farm visit, or need advice on goat farming, we\'re here to help.
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-green-50 p-6 rounded-lg border border-green-100">
                            <h3 class="text-xl font-bold text-green-800 mb-4">📍 Visit Our Farm</h3>
                            <div class="space-y-3 text-green-700">
                                <p><strong>Address:</strong><br>123 Farm Road<br>Green Valley, State 12345</p>
                                <p><strong>Farm Store Hours:</strong><br>Monday - Saturday: 8:00 AM - 6:00 PM<br>Sunday: 10:00 AM - 4:00 PM</p>
                            </div>
                        </div>
                        
                        <div class="bg-green-50 p-6 rounded-lg border border-green-100">
                            <h3 class="text-xl font-bold text-green-800 mb-4">📱 Contact Information</h3>
                            <div class="space-y-3 text-green-700">
                                <p><strong>Phone:</strong> (555) 123-4567</p>
                                <p><strong>Email:</strong> info@greenvalleygoats.com</p>
                                <p><strong>Emergency:</strong> (555) 123-4568</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg border border-green-100">
                        <h3 class="text-xl font-bold text-green-800 mb-4">🗓️ Schedule a Visit</h3>
                        <p class="text-green-700 mb-4">
                            Interested in visiting our farm? We offer guided tours every Saturday at 10:00 AM and 2:00 PM. 
                            Please call ahead to reserve your spot!
                        </p>
                        <p class="text-green-600">
                            <strong>Note:</strong> Farm tours are free and include samples of our fresh goat milk and cheese!
                        </p>
                    </div>
                </div>',
                'is_active' => true,
            ],
            [
                'slug' => 'gallery',
                'title' => 'Farm Gallery',
                'content' => '<div class="space-y-8">
                    <div class="text-center mb-8">
                        <div class="text-6xl mb-4">📸</div>
                        <h2 class="text-3xl font-bold text-green-800 mb-4">Life on the Farm</h2>
                        <p class="text-green-600 max-w-2xl mx-auto">
                            Take a peek into daily life at Green Valley Goat Farm through our photo and video gallery.
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-green-50 p-6 rounded-lg border border-green-100 text-center">
                            <div class="text-4xl mb-3">🐐</div>
                            <h3 class="font-semibold text-green-800 mb-2">Our Goats</h3>
                            <p class="text-green-600 text-sm">Meet our happy, healthy herd</p>
                        </div>
                        
                        <div class="bg-green-50 p-6 rounded-lg border border-green-100 text-center">
                            <div class="text-4xl mb-3">🏡</div>
                            <h3 class="font-semibold text-green-800 mb-2">Farm Life</h3>
                            <p class="text-green-600 text-sm">Daily activities and farm operations</p>
                        </div>
                        
                        <div class="bg-green-50 p-6 rounded-lg border border-green-100 text-center">
                            <div class="text-4xl mb-3">🥛</div>
                            <h3 class="font-semibold text-green-800 mb-2">Products</h3>
                            <p class="text-green-600 text-sm">Fresh milk and artisanal products</p>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <p class="text-green-600 mb-4">Gallery content will be managed through the admin dashboard.</p>
                    </div>
                </div>',
                'is_active' => true,
            ],
            [
                'slug' => 'testimonials',
                'title' => 'Customer Testimonials',
                'content' => '<div class="space-y-8">
                    <div class="text-center mb-8">
                        <div class="text-6xl mb-4">💬</div>
                        <h2 class="text-3xl font-bold text-green-800 mb-4">What Our Customers Say</h2>
                        <p class="text-green-600 max-w-2xl mx-auto">
                            Don\'t just take our word for it - hear what our satisfied customers have to say about 
                            Green Valley Goat Farm products and services.
                        </p>
                    </div>
                    
                    <div class="text-center">
                        <p class="text-green-600 mb-4">Customer testimonials will be displayed here through the admin dashboard.</p>
                    </div>
                </div>',
                'is_active' => true,
            ],
            [
                'slug' => 'blog',
                'title' => 'Farm News & Blog',
                'content' => '<div class="space-y-8">
                    <div class="text-center mb-8">
                        <div class="text-6xl mb-4">📰</div>
                        <h2 class="text-3xl font-bold text-green-800 mb-4">Farm News & Blog</h2>
                        <p class="text-green-600 max-w-2xl mx-auto">
                            Stay up to date with the latest news from our farm, goat farming tips, 
                            and insights from our experienced team.
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-green-50 p-6 rounded-lg border border-green-100">
                            <h3 class="text-xl font-bold text-green-800 mb-4">🌱 Farming Tips</h3>
                            <p class="text-green-700">
                                Learn from our 25+ years of experience with practical tips and advice 
                                for successful goat farming.
                            </p>
                        </div>
                        
                        <div class="bg-green-50 p-6 rounded-lg border border-green-100">
                            <h3 class="text-xl font-bold text-green-800 mb-4">📅 Farm Updates</h3>
                            <p class="text-green-700">
                                Get the latest news about our farm, new arrivals, seasonal products, 
                                and upcoming events.
                            </p>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <p class="text-green-600 mb-4">Blog posts will be managed through the admin dashboard.</p>
                    </div>
                </div>',
                'is_active' => true,
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}