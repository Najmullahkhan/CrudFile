<?php
import pygame
import random

# Initialize Pygame
pygame.init()

# Set up display
screen_width = 800
screen_height = 600
screen = pygame.display.set_mode((screen_width, screen_height))
pygame.display.set_caption("Curd Foam Simulation")

# Colors
WHITE = (255, 255, 255)  # Foam color
CURD_COLOR = (255, 240, 200)  # Curd-like color (light yellowish)
BLACK = (0, 0, 0)

# Parameters for the foam (bubble size, speed, etc.)
foam_particles = []

# Foam particle class
class FoamParticle(pygame.sprite.Sprite):
    def __init__(self, x, y, size):
        super().__init__()
        self.image = pygame.Surface((size * 2, size * 2), pygame.SRCALPHA)
        pygame.draw.circle(self.image, WHITE, (size, size), size)  # White color for foam
        self.rect = self.image.get_rect(center=(x, y))
        self.size = size
        self.speed_x = random.randint(-2, 2)
        self.speed_y = random.randint(-1, -5)  # Foam rises upward

    def update(self):
        self.rect.x += self.speed_x
        self.rect.y += self.speed_y
        
        # Respawn at the top if it goes out of bounds
        if self.rect.y < -self.size:
            self.rect.y = screen_height
            self.rect.x = random.randint(0, screen_width)
            self.speed_x = random.randint(-2, 2)
            self.speed_y = random.randint(-1, -5)

# Group for foam particles
foam_group = pygame.sprite.Group()

# Create initial foam particles (simulate curd foam bubbles)
for _ in range(100):
    foam_particle = FoamParticle(random.randint(0, screen_width), random.randint(0, screen_height), random.randint(5, 15))
    foam_group.add(foam_particle)

# Game loop
running = True
while running:
    screen.fill(CURD_COLOR)  # Fill the background with a curd-like color

    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            running = False

    # Update foam particles
    foam_group.update()

    # Draw foam particles (the curd foam bubbles)
    foam_group.draw(screen)

    # Refresh display
    pygame.display.flip()

    # Control frame rate
    me.time.Clock().tick(60)

# Quit the game
pygame.quit()
?>