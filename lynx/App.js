import { StatusBar } from 'expo-status-bar';
import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { CreateNativeStackNavigatior, createNativeStackNavigator } from '@react-navigation/native-stack';
import { createDrawerNavigator } from '@react-navigation/drawer';


function Home({ navigation }){
    return (
        <View>
            <Text>Home Screen with Map</Text>

        </View>
    );
}
function Routes({ navigation }){
  return (
      <View>
          <Text>Routes Screen</Text>
      </View>
  );
}
function TripPlanner({ navigation }){
  return (
      <View>
          <Text>Trip Planner Screen</Text>
      </View>
  );
}
function BusPasses({ navigation }){
  return (
      <View>
          <Text>Bus Passes Screen</Text>
      </View>
  );
}
function Account({ navigation }){
  return (
      <View>
          <Text>Account Screen</Text>
      </View>
  );
}
function Settings({ navigation }){
  return (
      <View>
          <Text>Settings Screen</Text>
      </View>
  );
}

const Drawer = createDrawerNavigator();

export default function App() {
  return (
    <NavigationContainer>
      <Drawer.Navigator initialRouteName="HomeScreen">
        <Drawer.Screen name="Home" component={Home} />
        <Drawer.Screen name="Routes" component={Routes} />
        <Drawer.Screen name="Trip Planner" component={TripPlanner} />
        <Drawer.Screen name="Bus Passes" component={BusPasses} />
        <Drawer.Screen name="Account" component={Account} />
        <Drawer.Screen name="Settings" component={Settings} />
      </Drawer.Navigator>
    </NavigationContainer>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
