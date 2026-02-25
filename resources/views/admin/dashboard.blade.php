@extends('admin.layouts.admin')

@section('content')
        <div class="page-header">
            <h1 class="page-title">Dashboard</h1>
            <p class="page-subtitle">Welcome back! Here's your platform overview.</p>
        </div>

        {{-- ACTION CARDS --}}
        <div class="action-cards">

            <a style="text-decoration: none;" href="{{ route('admin.blogs.index') }}" class="action-card">
                <div class="action-icon">
                    <i class="fas fa-blog"></i>
                </div>
                <h3>New Blog</h3>
                <p>Create a blog post</p>
            </a>

            <a style="text-decoration: none;" href="{{ route('admin.courses.index') }}" class="action-card">
                <div class="action-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Add Course</h3>
                <p>Create new course</p>
            </a>

            <a style="text-decoration: none;" href="{{ route('admin.admission.enquiries.index') }}" class="action-card">
                <div class="action-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>View Enquiries</h3>
                <p>Manage admission enquiries</p>
            </a>

            <a style="text-decoration: none;" href="{{ route('admin.announcements.index') }}" class="action-card">
                <div class="action-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3>New Announcement</h3>
                <p>Create announcement</p>
            </a>

        </div>


        {{-- STATS --}}
        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-value">{{ $totalEnquiries }}</div>
                <div class="stat-label">Admission Enquiries</div>
            </div>

            <div class="stat-card">
                <div class="stat-value">{{ $newEnquiries }}</div>
                <div class="stat-label">New Enquiries</div>
            </div>

            <div class="stat-card">
                <div class="stat-value">{{ $totalBlogs }}</div>
                <div class="stat-label">Total Blogs</div>
            </div>

            <div class="stat-card">
                <div class="stat-value">{{ $publishedBlogs }}</div>
                <div class="stat-label">Published Blogs</div>
            </div>

            <div class="stat-card">
                <div class="stat-value">{{ $totalCourses }}</div>
                <div class="stat-label">Courses</div>
            </div>

            <div class="stat-card">
                <div class="stat-value">{{ $totalStudents }}</div>
                <div class="stat-label">Students</div>
            </div>

            <div class="stat-card">
                <div class="stat-value">{{ $totalAnnouncements }}</div>
                <div class="stat-label">Announcements</div>
            </div>

            <div class="stat-card">
                <div class="stat-value">{{ $totalUsers }}</div>
                <div class="stat-label">Users</div>
            </div>

            <div class="stat-card">
                <div class="stat-value">{{ $totalRankers }}</div>
                <div class="stat-label">Top Rankers</div>
            </div>

            <div class="stat-card">
                <div class="stat-value">{{ $totalBanners }}</div>
                <div class="stat-label">Banners</div>
            </div>

        </div>


        {{-- LATEST ENQUIRIES --}}
        <div class="chart-card mt-4">
            <div class="chart-header">
                <h3>Latest Enquiries</h3>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Phone</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($latestEnquiries as $e)
                    <tr>
                        <td>{{ $e->full_name }}</td>
                        <td>{{ $e->course }}</td>
                        <td>{{ $e->phone_number }}</td>
                        <td>{{ $e->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No enquiries</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>


        {{-- LATEST BLOGS --}}
        <div class="chart-card mt-4">
            <div class="chart-header">
                <h3>Latest Blogs</h3>
            </div>

            <ul>
                @forelse($latestBlogs as $b)
                    <li>{{ $b->title }}</li>
                @empty
                    <li>No blogs</li>
                @endforelse
            </ul>
        </div>


@endsection            