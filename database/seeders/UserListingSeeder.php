<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 listings for user_id = 1
        for ($i = 1; $i <= 10; $i++) {
            DB::table('listings')->insert([
                'user_id' => 1,
                'title' => "Listing {$i} by User 1",
                'logo' => "https://i.pravatar.cc/150?img={$i}",
                'tags' => 'technology, business, startup',
                'company' => "Tech Innovations {$i}",
                'location' => "New York, NY",
                'email' => "user1_listing{$i}@example.com",
                'website' => "https://example{$i}.com",
                'description' => $this->getDescription($i),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Return a description for the listings based on the index.
     *
     * @param int $index
     * @return string
     */
    private function getDescription(int $index)
    {
        $descriptions = [
            "This is the first listing by User 1. We offer cutting-edge technology solutions that will help your business grow in 2025. Join us on our journey to revolutionize the tech industry.",
            "The second listing by User 1 offers premium consulting services tailored to your business needs. We specialize in providing expert advice to take your startup to the next level.",
            "In the third listing, User 1 introduces a groundbreaking software that will change the way companies interact with their clients. Our goal is to streamline business processes and improve efficiency.",
            "The fourth listing showcases a suite of products designed for small businesses. Whether you're a startup or an established company, our solutions are built to scale with you.",
            "Listing number five by User 1 brings you a marketing automation platform that will help you grow your customer base and engage with your audience like never before.",
            "With our sixth listing, User 1 presents a project management tool that helps teams collaborate more effectively, manage workflows, and achieve goals with ease.",
            "The seventh listing features a new product that simplifies the way businesses manage their finances. Our solution is secure, easy-to-use, and designed to save you time and money.",
            "In this eighth listing, User 1 introduces a state-of-the-art mobile app that enables businesses to offer better services to their customers while improving internal operations.",
            "The ninth listing is all about sustainability. User 1 offers eco-friendly solutions for businesses looking to reduce their carbon footprint and adopt greener practices.",
            "Finally, the tenth listing presents a unique approach to business growth by leveraging artificial intelligence. Our AI-powered platform helps you analyze data, optimize decisions, and boost profits.",
        ];

        return $descriptions[$index - 1] ?? 'This is a placeholder description for the listing.';
    }
}
